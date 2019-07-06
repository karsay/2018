
import numpy as np
from sklearn import svm
from sklearn.metrics import confusion_matrix

data = np.loadtxt('data.csv', delimiter=',')
y = data[:,0].astype(int)
x = data[:,1:3]

clf = svm.SVC(kernel='linear') #シンプルな直線を引く
clf.fit(x, y)#学習する(正解ラベルとサンプルデータを比べる)

data_test = np.loadtxt('data_test.csv', delimiter=',')
test_y = data_test[:,0].astype(int)
test_x = data_test[:,1:3]

print(test_y)
print(clf.predict(test_x))
print(clf.score(test_x, test_y))