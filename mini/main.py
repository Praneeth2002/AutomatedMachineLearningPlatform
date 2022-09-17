import sys
import glob
import time
import os
import pandas as pd
import numpy as np
from sklearn import preprocessing
from sklearn.linear_model import LinearRegression,LogisticRegression  
from sklearn.neighbors import KNeighborsRegressor
from sklearn.tree import DecisionTreeRegressor
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import r2_score, mean_squared_error, mean_absolute_error  

def info():
	return data.info()

def description():
	return data.describe()

def imputation_mean(colnames_numerics_only):
	for i in colnames_numerics_only:
		data[i].fillna(int(data[i].mean()),inplace=True)
	return data

def imputation_median(colnames_numerics_only):
	for i in colnames_numerics_only:
		data[i].fillna(int(data[i].median()),inplace=True)
	return data

def imputation_mode(colnames_string_only):
	for i in colnames_string_only:
		data[i].fillna(data.mode()[0],inplace=True)
	return data

def labelencoding():
	label_encoder = preprocessing.LabelEncoder()
	for i in colnames_string_only:
		data[i] = label_encoder.fit_transform(data[i])
	return data

def onehotencoding():
	one_hot = preprocessing.OneHotEncoder
	for i in colnames_string_only:
		data[i] = one_hot.fit_transform(data[i])
	return data

def linear_regression(X_train,X_test,y_train,y_test):
	lr = LinearRegression()
	lr.fit(X_train,y_train)
	y_pred_lr = lr.predict(X_test)
    return y_pred_lr

def KNeighbor(X_train,X_test,y_train,y_test):
	knn = KNeighborsRegressor()
	knn.fit(X_train,y_train)
	y_pred_knn = knn.predict(X_test)
    return y_pred_knn

def randomforest(X_train,X_test,y_train,y_test):
	rf = RandomForestRegressor()
	rf.fit(X_train,y_train)
	y_pred_rf = rf.predict(X_test)
    return y_pred_rf

def decisiontree(X_train,X_test,y_train,y_test):
	dt = DecisionTreeRegressor()
	dt.fit(X_train,y_train)
	y_pred_dt = dt.predict(X_test)
    return y_pred_dt

def logisticRegression(X_train,X_test,y_train,y_test):
	lg = LogisticRegression()
	lg.fit(X_train,y_train)
	y_pred_lg = lg.predict(X_test)
    return y_pred_lg


dir_name = 'C:/xampp/htdocs/mini/experiment/uploads/' 
list_of_files = filter(lambda x: os.path.isfile(os.path.join(dir_name, x)),os.listdir(dir_name) ) 
list_of_files = sorted(list_of_files,key = lambda x: os.path.getmtime(os.path.join(dir_name, x)),reverse=True) 
for file_name in list_of_files: 
	file_path = os.path.join(dir_name, file_name) 
	k = file_name
	break 
data = pd.read_csv(dir_name+k)
colnames_numerics_only =data.select_dtypes(include=np.number).columns.tolist()
colnames_string_only = data.select_dtypes(include=['object']).columns.tolist() 
imputation_mean(colnames_numerics_only)
imputation_median(colnames_numerics_only)