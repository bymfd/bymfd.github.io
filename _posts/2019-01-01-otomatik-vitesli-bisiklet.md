---
title: Otomatik Vitesli Bisiklet
tags: otomatik vitesli bisiklet sistemi arduino nano lcd hız
category: proje
---

Otomatik vitesli bisiklet


Bisiklet, ulaşım, eğlence, spor, hobi ve taşımacılık gibi alanlarda kullanılmaktadır. Günümüzde bisikletinde en yaygın olarak kullanılan vites kadronun dışında, ayrı bir birim olarak yer alan ön ve arka aktarıcılara dayanan sistemdir Gidilen yol ile uygulanan güç arasındaki ilişkiyi kontrol eder. Vites sistemi pedala bağlı ayna kol yani ön vites dişli takımından ve arka tekerleğe bağlı arka vites dişli takımından oluşur. Gidon çevresinde bulunan sağ vites kontrol kolu arka vitesi, sol vites kontrol kolu ise ön vitesi kontrol eder. Sürücüyü en az yoran, konforlu ve en çok performans sağlamak ayrıca insanlara bisiklet kullanımını daha çok sevdirmek ve doğa kirliliğini önlemek için otomatik vites sistemini uygun bir çözüm olarak görülmüştür

diyerek başladık söze ve Tübitak a sunduk, projemiz 2 kez konya bölge birincisi oldu bizde en iyisi özgürleştirmek deyip saldık buraya.

geliştirdiğimiz sistem ile otomatik tüm rublle dişlili bisikletler , göbekten vitesli bisikletler için kullanabilir olacaksınız.
İhtiyacınız olan şeyler

    arduino (pro mini yada uno ile test ettik)
    bolca kablo,havya seti
    bir motor sürcüsü
    bir servo motor (mg996 ile yaptık)
    rotary encoder
    ekran (2*16 veya oled 0.96” için yaptık )
    hayal gücü
    matkap,tornavida,vidalar ,flex vs vs bisiklete monte etmek için gereken herşey
    el becerisi ve azim
    birsürü boru (boyutları verdim biz metal kullandık varsa 3d printer müthiş olur )



2 çeşiti var

    Standar 2*16 ekranlı(alpha 3)

vites sistemi

    lcd ekranlı 0.96” (alpha 6 )

vites sistemi

1.si bizim 3.prototipimiz sağlam ve güzel çalışır ama görüntüsü biraz yanınızda ev telefonu taşımak gibi,

    4 yada 5 . prototipimiz sağlam temiz çalışıyor ve görüntüsü diğerlerine göre kat kat güzel ve daha küçük :)

Birazcık görelim

vites sistemi

bu arkadaş servo motor yardımı ile vites telinin kontrol edilmesini sağlar

    sıfır switchi vitesin 1 olmasını tetikler yani sistemin referans noktasıdır
    sayaç ise telin ne kadar çekildiği ya da salındığını sayar
    civataya servo motor başı girer. vites sistemi

vites sistemi



Buraya kadar vites telini asılacak sistemi tanıdık… Şimdi Servo motora neler yaptık ona bakalım.

vites sistemi

servonun elektronik tüm elektronik elelmanlarını çıakrtıp onu bir redüktörlü motora dönüştürdük bu bize teli çekmek için yeterli gücü verir ve mg96 serisi motorun açı sorunlarında kurtarır açı demişken vites sistemi Servo motordaki açı sınırlayıcısını da çıkartıyoruz ve servonun çıkış milini vites telini aktaracak civataya girecek şekilde yontuyoruz .

</hr>

vites sistemi
şekilde görüldüğü gibi elemanları bir araya getiriyoruz kırmızı şeyin orada da rotary encoder ‘ımız zincire bağlı bağımsız bir dişlide hareket ediyor bu da bize pedalın hangi yönde döndüğünü anlamamızı sağlıyor

en son sistemin elektronik kısımlarını da bir araya getirelimmm vites sistemi

kodlar ve açıklamaları elbette burda (ekler içinde teknik çizimler mevcut ): 


burada github’da
