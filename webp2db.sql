CREATE TABLE kullanicilar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kullanici_adi VARCHAR(255) NOT NULL ,
    sifre VARCHAR(255) NOT NULL,
    olusturulma_tarihi DATE
);

CREATE TABLE albumler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sanatci_adi VARCHAR(255) NOT NULL,
    album_adi VARCHAR(255) NOT NULL,
    cikis_tarihi DATE NOT NULL,
    telif_hakki_bilgisi TEXT,
    lisans_bilgisi TEXT,
    olusturulma_tarihi DATE,
    guncellenme_tarihi DATE
);