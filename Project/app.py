#sever side
from flask import Flask, render_template, request, redirect, url_for
import pymysql
from datetime import datetime

app = Flask(__name__)
conn = pymysql.connect('103.91.205.130', 'pee', '0880880880Az#Q', 'pee')

@app.route('/')
def showdata():
    cur = conn.cursor()
    cur.execute('select * from dbrestaurant')
    rows = cur.fetchall()
    return render_template('web.html', rows=rows, num=[i for i in range(1, len(rows)+1)])

@app.route('/add')
def frominput():
    return render_template('person.html')

@app.route("/delete/<string:id_data>", methods=['GET'])
def delete(id_data):
    cur = conn.cursor()
    cur.execute("delete from dbrestaurant where id=%s",(id_data))
    conn.commit()
    return redirect(url_for('showdata'))

@app.route("/insert", methods=['POST'])
def insert():
    if request.method == "POST":
        name = request.form['name']
        food = request.form['food']
        with conn.cursor() as cursor:
            sql = "Insert into `dbrestaurant` (`name` , `food`) values(%s, %s)"
            cursor.execute(sql, (name, food))
            conn.commit()
        return redirect(url_for('showdata'))

@app.route("/update", methods=['POST'])
def update():
    if request.method == "POST":
        id_update = request.form['id']
        name = request.form['name']
        food = request.form['food']
        with conn.cursor() as cursor:
            sql = "update dbrestaurant set name=%s, food=%s where id=%s"
            print(sql)
            cursor.execute(sql, (name, food, id_update))
            conn.commit()
        return redirect(url_for('showdata'))

if __name__ == "__main__":
    app.run(debug=True)
