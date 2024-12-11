from ultralytics import YOLO

def load_model(model_path):
    """Memuat model YOLOv8"""
    model = YOLO(model_path)  # Menggunakan model dari ultralytics YOLOv8
    return model
