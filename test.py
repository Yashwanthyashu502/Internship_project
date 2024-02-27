# print("hi")
import numpy as np
import pandas as pd
import itertools
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.linear_model import PassiveAggressiveClassifier
from sklearn.metrics import accuracy_score, confusion_matrix
from os.path import dirname, join
import mysql.connector

df = pd.read_csv("data.csv")
df.shape
labels=df.Label
#print(labels)
xtest=[]
df1 = pd.read_csv("data.csv",header=None)
X = df.chiefcomplaint

#'orahygine','diet','chiefcomplaint','illnessorigin','illnessduration','problemswhileeat','typeofpain','painreleifemethod','swelling','feverbodypain','sleepproblem'


mydb = mysql.connector.connect(host="localhost",user="root",password="",database="mcods")
mycursor = mydb.cursor()

mycursor.execute("SELECT chiefcomplaint FROM tblpatientdetails ORDER BY id DESC LIMIT 1")
myresult = mycursor.fetchall()
testinput=str(myresult)
testinput=testinput.replace('[(', '')
testinput=testinput.replace(',)]', '')
testinput=testinput.replace("'", "")
###print(testinput)

x_train,x_test,y_train,y_test=train_test_split(X, labels, test_size=0.1)
tfidf_vectorizer=TfidfVectorizer(stop_words='english', max_df=0.7)

x_test = [testinput]



tfidf_train=tfidf_vectorizer.fit_transform(x_train)
tfidf_test=tfidf_vectorizer.transform(x_test)

pac=PassiveAggressiveClassifier(max_iter=50)
pac.fit(tfidf_train,y_train)

y_pred=pac.predict(tfidf_test)
print(y_pred[0])

idv="1"
mycursor.execute("UPDATE tblpredicted SET pred = %s WHERE id=%s",(str(y_pred[0]),idv))
mydb.commit()
