-- Use this to Insert data to:

-- `barang` table
INSERT INTO `barang`(`id_barang`, `nama`, `brand`, `type`, `harga`, `icon_url`, `av_quantity`, `desc`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]');

-- `ledger` table
INSERT INTO `ledger`(`invoice`, `phone`, `id_barang`, `start_date`, `end_date`, `price`, `returned`, `paid`, `quantity`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]');

-- `penyewa` table
INSERT INTO `penyewa`(`phone`, `nama`, `alamat`) VALUES ('[value-1]','[value-2]','[value-3]');
