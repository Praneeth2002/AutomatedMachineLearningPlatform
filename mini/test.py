from main import *
from flask import Flask

app = Flask(__name__)

@app.route('/')
def describe():
    return data.describe().to_html(header="true", table_id="table")

if __name__ == '__main__':
    app.run(host='0.0.0.0', debug=True)