import cv2
import test_not_altered
import ultrasonic_distance
import RPi.GPIO as GPIO
import time

#ultrasonic
#GPIO Mode (BOARD / BCM)
GPIO.setmode(GPIO.BCM)

#set GPIO Pins
GPIO_TRIGGER = 18
GPIO_ECHO = 24

#set GPIO direction (IN / OUT)
GPIO.setup(GPIO_TRIGGER, GPIO.OUT)
GPIO.setup(GPIO_ECHO, GPIO.IN)
#ultrasonic

#opencv
classNames= []
classFile = '/home/anyx/OpenCV_Files/Final-Project/Drone-Object-Detection/coco.names'
with open(classFile, 'rt') as f:
    classNames = f.read().rstrip('\n').split('\n')

configPath = '/home/anyx/OpenCV_Files/Final-Project/Drone-Object-Detection/ssd_mobilenet_v3_large_coco_2020_01_14.pbtxt'
weightsPath = '/home/anyx/OpenCV_Files/Final-Project/Drone-Object-Detection/frozen_inference_graph.pb'

net = cv2.dnn_DetectionModel (weightsPath,configPath)
net.setInputSize(320,320)
net.setInputScale(1.0/127.5)
net.setInputMean((127.5,127.5,127.5))
net.setInputSwapRB(True)
#opencv

if __name__ == '__main__':
    #ultrasonic
    try:
        while True:
            dist = ultrasonic_distance.ultrasonic_function()
            print ("Measured Distance = %.1f cm" % dist)
            time.sleep(1)

        # Reset by pressing CTRL + C
    except KeyboardInterrupt:
        print("Measurement stopped by User")
        GPIO.cleanup()
    #ultrasonic

    #opencv
    cap = cv2.VideoCapture(0)
    cap.set(3,640)
    cap.set(4,480)
    #cap.set(10,70)

    while True:
        success, img = cap.read()
        result, objectInfo = test_not_altered.getObjects(img,0.45, 0.2, False)
        print(objectInfo)
        #cv2.imshow("Output",img)
        cv2.waitKey(1)
    #opencv






