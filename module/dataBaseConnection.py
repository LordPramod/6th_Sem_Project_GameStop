import mysql.connector
from mysql.connector import Error

# Database connection parameters
host = "localhost"  # e.g., "localhost"
user = "root"
password = ""
database = "gamestop"

# Create a connection to the database
conn = create_connection(host, user, password, database)

# Query to select data
select_query = "SELECT * FROM your_table_name"

# Execute the query and fetch data
data = execute_query(conn, select_query)

# Print the retrieved data
for row in data:
    print(row)
