import mysql.connector
db = mysql.connector.connect(
  host='localhost',
  user='smooth',
  password=''
)
my = db.cursor()
my.execute('data')
