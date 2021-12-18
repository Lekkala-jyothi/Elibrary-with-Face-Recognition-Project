from flask import Flask, request, jsonify
import face_recognition
from PIL import Image
import os
import cv2
import numpy as np

app = Flask(__name__)

directory = os.path.join(os.getcwd(), 'model/static/profiles/')
capDirectory = os.path.join(os.getcwd(), 'model/static/profiles/captures')


@app.route('/')
@app.route('/recognize', methods=['POST'])
def Recognize():
    out = 'false'
    msg = 'Authentication Failed'
    if request.method == 'POST':

        capImg = request.files['capture']
        capImg.save(os.path.join(capDirectory, request.form['user']))

        user = os.path.join(directory, request.form['user'])
        capture = os.path.join(capDirectory, request.form['user'])

        capFR = face_recognition.load_image_file(capture)
        capFR = cv2.cvtColor(capFR, cv2.COLOR_BGR2RGB)
        capLct = face_recognition.face_locations(capFR)
        capEnc = face_recognition.face_encodings(capFR, capLct)[0]

        userFR = face_recognition.load_image_file(user)
        userFR = cv2.cvtColor(userFR, cv2.COLOR_BGR2RGB)
        userLct = face_recognition.face_locations(userFR)
        userEnc = face_recognition.face_encodings(userFR, userLct)[0]

        try:
            result = face_recognition.compare_faces([capEnc], userEnc)
            if (result == [True]):
                out = "true"
                msg = 'Authentication Success'
        except IndexError:
            out = 'false'
            msg = 'Authentication Error'

        os.remove(capture)

    return jsonify({'detection': out, 'Message': msg})
