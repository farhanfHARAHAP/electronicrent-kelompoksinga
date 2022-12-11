-- Use this to make several table for the database!

-- Create Table `barang`
CREATE TABLE `barang` ( `id_barang` varchar(5) NOT NULL, `nama` varchar(20) NOT NULL, `brand` varchar(20) NOT NULL, `type` varchar(20) NOT NULL, `harga` int(1) NOT NULL, `icon_url` varchar(100) NOT NULL, `av_quantity` int(1) NOT NULL, `desc` varchar(500) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

-- Create Table `ledger`
CREATE TABLE `ledger` ( `invoice` int(1) NOT NULL, `phone` varchar(20) NOT NULL, `id_barang` varchar(5) NOT NULL, `start_date` date NOT NULL, `end_date` date NOT NULL, `price` int(1) NOT NULL, `returned` tinyint(1) NOT NULL, `paid` tinyint(1) NOT NULL, `quantity` int(1) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 
 
-- Create Table `penyewa`
CREATE TABLE `penyewa` ( `phone` varchar(20) NOT NULL, `nama` varchar(20) NOT NULL, `alamat` varchar(50) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 