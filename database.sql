#create table cameras
#(
#    Name VARCHAR(30),
#    SnipPict TEXT,
#    VResolution TEXT,
#    PhResolution TEXT,
#    Battery TEXT,
#    Matrix TEXT,
#    Lens TEXT,
#    Monopod BOOLEAN,
#    Aquabox BOOLEAN,
#    PRIMARY KEY(Name)
#);

insert into cameras values
(
    "Xiaomi Yi",
    "images\/image09.jpg",
    "1296p 30fps<br>720p 60fps",
    "1920x1080",
    "1800mAh 5h\/30h",
    "Sony Exmor R BSI CMOS 16Mp",
    "fov 170 f2.8",
    False,
    False
),
(
    "SJCAM SJ5000 Plus",
    "images\/image07.jpg",
    "1080p 60fps<br>720p 120fps",
    "4608x3456",
    "900mAh 3h\/60h",
    "Panasonic 1\/2.33 CMOS 16Mp",
    "fov 170 f2.8",
    True,
    True
);