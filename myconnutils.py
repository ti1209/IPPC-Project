import mysql.cursors 
 
# Function return a connection
def getConnection():
    
    # You can change the connection arguments.
    connection = pymysql.connect(host='localhost',
                                 user='root',
                                 password='root',                            
                                 db='test',
                                 charset='utf8',
                                 cursorclass=pymysql.cursors.DictCursor)
    return connection
