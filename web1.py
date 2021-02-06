#!C:\Users\bhanu\AppData\Local\Programs\Python\Python39\python.exe
print("Content-Type:text/html\n")
print()
import cgi

print("<h1>Welcome to Python</h1>")
print("<hr/>")
print("<h1>Using input tag</h1>")
print("<body bgcolor='red'>")

form = cgi.FieldStorage()

id = form.getvalue("id")
entername = form.getvalue("entername")
address = form.getvalue("address")
gender = form.getvalue("gender")
hindi = form.getvalue("hindi")
english = form.getvalue("english")
telugu = form.getvalue("telugu")
select1 = form.getvalue("select")

import mysql.connector

con = mysql.connector.connect(user = 'root' , password = '' , host = 'localhost' , database='webpython')
cur = con.cursor()

cur.execute("insert into student values(%s,%s,%s,%s,%s,%s,%s,%s)",(id,entername,gender,hindi,english,telugu,select1))
con.commit()

cur.close()
con.close()
print("<h3>record inserted sucessfully</h3>")
print("<a href = 'http://localhost/PHPtest/web1.php'>Click here to go back</a>")
