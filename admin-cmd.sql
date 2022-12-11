
-- Admin paid verification
UPDATE `ledger` SET `paid`= '1' WHERE `invoice` = '1'

-- Admin returned verification
UPDATE `ledger` SET `returned`='1' WHERE `invoice`='1'