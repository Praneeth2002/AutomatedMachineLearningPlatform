import glob
import os
import time
dir_name = 'C:/xampp/htdocs/mini/experiment/uploads/'
list_of_files = filter( os.path.isfile,glob.glob(dir_name + '*') )
list_of_files = sorted( list_of_files,key = os.path.getmtime,reverse=True)
return (list_of_files[0].replace('/','\\'))