# Use your utility module.
import myconnutils
import pymysql.cursors

connection = myconnutils.getConnection()
 
print ("Connect successful!")
 
try :
    cursor = connection.cursor()
   
    sql =  "Insert into ex (CarLo, PValue, Time) " \
         + " values (%s, %s, %s) "
   
    # Execute sql, and pass 3 parameters.
    cursor.execute(sql, ('A5', 200, 100 ) )
   
    connection.commit()
 
finally:
    # Close connection.
    connection.close()      
