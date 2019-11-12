-- SQL statements

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET TIME_ZONE = "+00:00";

-- Create table

CREATE TABLE IF NOT EXISTS siteStatus (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  siteUrl VARCHAR(255),
  siteStatus VARCHAR(10)
) ENGINE = MyISAM DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci AUTO_INCREMENT = 1;


-- Fill in example

INSERT INTO siteStatus (
  siteUrl,
  siteStatus
)

SELECT 
  "https://www.mycoolsite.org", 
  "Up"
  
  FROM DUAL

  WHERE (
    SELECT COUNT(*) 
    FROM siteStatus 
    WHERE siteUrl = "https://www.mycoolsite.org") = 0;
