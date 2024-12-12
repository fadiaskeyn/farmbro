import sys
import os
import cv2
import numpy as np
from ultralytics import YOLO
import logging

# Setup logging
logging.basicConfig(level=logging.INFO)
logger = logging.getLogger(__name__)

def load_model(model_path):
    """Load YOLO model."""
    if not os.path.exists(model_path):
        logger.error(f"Model file not found: {model_path}")
        sys.exit(1)
    return YOLO(model_path)

def draw_bounding_boxes(frame, results):
    """Draw bounding boxes and labels on the frame."""
    for box in results[0].boxes:
        xyxy = box.xyxy[0].cpu().numpy()
        conf = box.conf[0].cpu().numpy()
        cls = int(box.cls[0].cpu().numpy())

        if conf > 0.5:  # Hanya gambar box dengan confidence > 0.5
            label = f"Class {cls}, Conf: {conf:.2f}"
            x1, y1, x2, y2 = xyxy
            cv2.rectangle(frame, (int(x1), int(y1)), (int(x2), int(y2)), (0, 255, 0), 2)
            cv2.putText(frame, label, (int(x1), int(y1) - 10), cv2.FONT_HERSHEY_SIMPLEX, 0.5, (0, 255, 0), 2)
    return frame

def process_video(video_path, model_path, output_path, progress_file):
    """Process video for object detection."""
    video = cv2.VideoCapture(video_path)
    if not video.isOpened():
        logger.error(f"Error opening video file: {video_path}")
        sys.exit(1)

    # Video properties
    frame_width = int(video.get(cv2.CAP_PROP_FRAME_WIDTH))
    frame_height = int(video.get(cv2.CAP_PROP_FRAME_HEIGHT))
    fps = int(video.get(cv2.CAP_PROP_FPS))
    frame_count = int(video.get(cv2.CAP_PROP_FRAME_COUNT))

    # Prepare video writer with H264 codec
    fourcc = cv2.VideoWriter_fourcc(*'H264')  # H264 codec
    output_video = cv2.VideoWriter(output_path, fourcc, fps, (frame_width, frame_height))

    # Load model
    model = load_model(model_path)

    total_chickens = 0
    previous_chickens = 0
    frame_index = 0

    # Process each frame
    while True:
        ret, frame = video.read()
        if not ret:
            break

        # YOLO inference with confidence and IoU threshold
        results = model(frame, conf=0.5, iou=0.5)  # Sesuaikan threshold jika diperlukan
        frame_with_boxes = draw_bounding_boxes(frame, results)
        output_video.write(frame_with_boxes)

        # Count chickens in the frame (assuming chicken class is 0)
        chicken_count = sum(1 for box in results[0].boxes if int(box.cls[0].cpu().numpy()) == 0 and box.conf[0].cpu().numpy() > 0.5)

        # Update total chickens only if the count has changed from the previous frame
        if chicken_count != previous_chickens:
            total_chickens = chicken_count  # Update total chickens if the count changes
            previous_chickens = chicken_count  # Update previous chicken count

        # Update progress
        progress = (frame_index / frame_count) * 100
        with open(progress_file, 'w') as pf:
            # Menyimpan progress dan jumlah ayam yang terdeteksi di frame terakhir
            pf.write(f"Processed frame {frame_index}/{frame_count}, Progress: {progress:.2f}%, Total chickens detected: {total_chickens}\n")

        frame_index += 1

    # Cleanup
    video.release()
    output_video.release()
    cv2.destroyAllWindows()
    logger.info(f"Detection complete. Total chickens detected: {total_chickens}")

if __name__ == "__main__":
    if len(sys.argv) < 5:
        print("Usage: python yolo.py <video_path> <model_path> <output_path> <progress_file>")
        sys.exit(1)

    video_path = sys.argv[1]
    model_path = sys.argv[2]
    output_path = sys.argv[3]
    progress_file = sys.argv[4]

    process_video(video_path, model_path, output_path, progress_file)
