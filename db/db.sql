create table menu(
    id        VARCHAR(256)    PRIMARY KEY,
    gambar        VARCHAR(256),
    nama        VARCHAR(256),
    description    VARCHAR(256),
    harga        INT,
    kategori    VARCHAR(256)
);

create table admin(
    username    VARCHAR(256)    PRIMARY KEY,
    password    VARCHAR(256)
);

id admin
pw admin
md5 21232f297a57a5a743894a0e4a801fc3

id indipaler
pw indra
md5 e24f6e3ce19ee0728ff1c443e4ff488d

id rajawin
pw rumput
md5 99ade3538a249164fe158c3181ce2e68

id jessev
pw ribetbangethostingelah
md5 9eebb026da27588e781afad0851a4b47



INSERT INTO admin
VALUES ('admin', MD5('admin')),
       ('indipaler', MD5('indra')),
       ('rajawin', MD5('rumput')),
       ('jessev', MD5('ribetbangethostingelah'))


INSERT INTO menu
VALUES  ('', '', 'Koral Bits - Small', 'Koral goreng ditaburi dengan garam', 14000, 'Koral'),
        ('', '', 'Koral Bits - Medium', 'Koral goreng ditaburi dengan garam', 18000, 'Koral'),
        ('', '', 'Koral Bits - Large', 'Koral goreng ditaburi dengan garam', 21000, 'Koral'),
        ('', '', 'Celp Rings', 'Rumput laut goreng dengan taburan garam',21000, 'Celp'),
        ('', '', 'Celp Rings - with Salty Sauce', 'Rumput laut goreng dengan taburan garam dan saus gurih', 28000, 'Celp'),
        ('', '', 'Celp Shake', 'Minuman Rumput laut kocok', 28000, 'Celp'),
        ('', '', 'Seafoam Soda - Small', 'Soda dengan tambahan Seafoam', 14000, 'Soda'),
        ('', '', 'Seafoam Soda - Medium', 'Soda dengan tambahan Seafoam', 18000, 'Soda'),
        ('', '', 'Seafoam Soda - Large', 'Soda dengan tambahan Seafoam', 21000, 'Soda')
