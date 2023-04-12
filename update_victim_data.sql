include("db_connect.php")
CREATE PROCEDURE update_victim_data(
    IN Victim_FIR VARCHAR(255),
    IN Name VARCHAR(255),
    IN Place VARCHAR(255),
    IN Statement VARCHAR(255),
    IN District VARCHAR(255),
    IN UID VARCHAR(255)
)
BEGIN
    -- Generate the SQL query to update the record
    SET @updateQuery = CONCAT('UPDATE victim_data SET ',
        'Name = "', Name, '", ',
        'Place = "', Place, '", ',
        'Statement = "', Statement, '", ',
        'District = "', District, '", ',
        'UID = "', UID, '" ',
        'WHERE Victim_FIR = "', Victim_CREATE PROCEDURE update_victim_data(
    IN Victim_FIR VARCHAR(255),
    IN Name VARCHAR(255),
    IN Place VARCHAR(255),
    IN Statement VARCHAR(255),
    IN District VARCHAR(255),
    IN UID VARCHAR(255)
)
BEGIN
  SET @updateQuery = CONCAT('UPDATE victim_data SET ',
    'Name = "'. Name. '", ',
    'Place = "'. Place. '", ',
    'Statement = "'. Statement. '", ',
    'District = "'. District. '", ',
    'UID = "'. UID. '", ',
    'WHERE Victim_FIR = "'. Victim_FIR . '";' -- add a semicolon at the end
);
    -- Execute the update query
    PREPARE stmt FROM @updateQuery;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END;
FIR, '"'
    );
    
    -- Execute the update query
    PREPARE stmt FROM @updateQuery;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END;
