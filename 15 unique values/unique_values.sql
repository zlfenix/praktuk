SELECT  DISTINCT key INTO temp_table FROM test_table;
DELETE FROM test_table;
INSERT INTO test_table SELECT * FROM temp_table;
DROP TABLE temp_table;
