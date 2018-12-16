CREATE TABLE `case_keywords` (
	keyword_pk INT AUTO_INCREMENT PRIMARY KEY,
	case_name VARCHAR(255) UNIQUE NOT NULL,
	keywords VARCHAR(255)
);

INSERT INTO case_keywords (`case_name`, `keywords`)
VALUES 
('Juma Hamidu vs The Republic, Criminal Appeal No. 67 of 2001, Court of Appeal',
'Criminal Law'),
('NIC (T) Limited vs Abdalla Makunganya, Civil Application N0. 14 of 2003, Court of Appeal',
'Court of Appeal Rules'),
('Joyce Beda Mpinda vs CRDB Bank Ltd And Another, Gwalogano Abasi Mwasabwite and Erick Auction Mart & Court Broker, Civil Application N0. 181 of 2004, Court of Appeal',
'Court of Appeal Rules'),
('Etieness Hotel vs National Housing Corporation, Civil Reference No. 32 of 2005, Court of Appeal',
'Law of Tort'),
('Uniafrica Limited, Karim Kanji and Minaz Kanji vs Exim Bank (T) Ltd, Civil Appeal No. 30 of 2006, Court of Appeal',
'Civil procedure code'),
('Tanga Cement Co. Ltd vs Christopherson Co. Ltd, Civil Appeal No. 133 of 2006, Court of Appeal',
'Contract Law & Company Law & Corporate Law & Commercial Law'),
('Clemence Mpondelo And Mapambano Charles vs The Republic, Criminal Appeal No. 41 of 2016, Court of Appeal',
'Court of Appeal Rules & Criminal Law'),
('Emmanuel Chigoji vs The Republic, Criminal Appeal No. 63 of 2016, Court of Appeal',
'Court of Appeal Rules & Criminal Law'),
('Tano Mbika vs The Republic, Criminal Appeal No. 152 of 2016, Court of Appeal',
'Criminal Law'),
('Ally Rashidi vs The Republic, Criminal Appeal No. 540 of 2016, Court of Appeal',
'Criminal Law');