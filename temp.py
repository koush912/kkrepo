from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/')
def temperature_converter():
    return render_template('index.html')

@app.route('/convert', methods=['POST'])
def convert_temperature():
    if 'celsius' in request.form:
        try:
            celsius = float(request.form['celsius'])
            fahrenheit = celsius * 9/5 + 32
            return render_template('result.html', celsius=celsius, fahrenheit=fahrenheit)
        except ValueError:
            return render_template('error.html', message='Invalid input')
    elif 'fahrenheit' in request.form:
        try:
            fahrenheit = float(request.form['fahrenheit'])
            celsius = (fahrenheit - 32) * 5/9
            return render_template('result.html', celsius=celsius, fahrenheit=fahrenheit)
        except ValueError:
            return render_template('error.html', message='Invalid input')
    else:
        return render_template('error.html', message='No input provided')

if __name__ == '__main__':
    app.run()