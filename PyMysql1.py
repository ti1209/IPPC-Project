# Use your utility module.
import myconnutils

connection = myconnutils.getConnection()
 
print ("Connect successful!")
 
sql = "Select * From ex"
 
try :
    cursor = connection.cursor()
 
    # Execute sql, and pass 1 parameter.
    cursor.execute(sql) 
     
    #print ("cursor.description: ", cursor.description)
     
    print('')
     
    for row in cursor:
        print (" ----------- ")
        print ("CarLo: ", row["CarLo"])
        print ("PValue ", row["PValue"])
        print ("Time: ", row["Time"])
 
finally:
    # Close connection.
    connection.close()    
  
