---
title: Otomatik vitesli bisiklet
layout: post
category: tech
thumbnail: bas.jpg
summary: |-
  Otomatik vitesler otomobiller otobüsler tırlar hemen hemen heryerde kullanılan bu vites türü uzun yıllardır hayatımızda bisikletlerde de kullanılıyor fakat yakın zamanda popülerleşmeye başladı buyrun size Arkadaşlarım ile yaptığımız otomatik vites sisteminden bahsedeyim

  Anahtar Kelimeler: Bisiklet, Otomatik Vites, Ardiuno, Aktarıcı,bicycle, derailleur ,gear,shifting,automatic
---

Bisiklet, ulaşım, eğlence, spor, hobi ve taşımacılık gibi alanlarda kullanılmaktadır. Günümüzde bisikletinde en yaygın olarak kullanılan vites kadronun dışında, ayrı bir birim olarak yer alan ön ve arka aktarıcılara dayanan sistemdir Gidilen yol ile uygulanan güç arasındaki ilişkiyi kontrol eder. Vites sistemi pedala bağlı ayna kol yani ön vites dişli takımından ve arka tekerleğe bağlı arka vites dişli takımından oluşur. Gidon çevresinde bulunan sağ vites kontrol kolu arka vitesi, sol vites kontrol kolu ise ön vitesi kontrol eder.
Sürücüyü en az yoran, konforlu ve en çok performans sağlamak ayrıca insanlara bisiklet kullanımını daha çok sevdirmek ve doğa kirliliğini önlemek için otomatik vites sistemini uygun bir çözüm olarak görülmüştür 


diyerek başladık söze ve  Tübitak a sunduk, projemiz 2 kez konya bölge birincisi oldu bizde en iyisi özgürleştirmek deyip saldık buraya.
<iframe allowfullscreen="" frameborder="0" height="344" src="https://www.youtube.com/embed/njGc3xy0Feg" width="459"></iframe>

geliştirdiğimiz sistem ile otomatik  tüm rublle dişlili bisikletler , göbekten vitesli bisikletler için kullanabilir olacaksınız. <br>
<h3><b> İhtiyacınız olan şeyler</b> </h3>
* arduino (pro mini yada uno ile test ettik)
* bolca kablo,havya seti 
* bir motor sürcüsü
* bir servo motor (mg996 ile yaptık)
* rotary encoder 
* ekran (2*16 veya oled 0.96" için yaptık )
* hayal gücü
* matkap,tornavida,vidalar ,flex vs vs bisiklete monte etmek için gereken herşey 
* el becerisi ve azim 
* birsürü boru (boyutları verdim biz metal kullandık varsa 3d printer müthiş olur )

<br><br>
<h3><b>2 çeşiti var</b></h3>

1.   Standar 2*16  ekranlı(alpha 3)

<img class="card-img-responsive" width="50%" src="/assets/img/a6.png"  alt="vites sistemi"><br><br>  

2.   lcd ekranlı 0.96" (alpha 6 )
	
	
<img class="card-img-responsive" width="50%" src="/assets/img/a3.jpg"  alt="vites sistemi"><br><br>  

1.si  bizim 3.prototipimiz sağlam ve güzel çalışır ama görüntüsü biraz yanınızda ev telefonu taşımak gibi,
2. 4 yada 5 . prototipimiz sağlam temiz çalışıyor ve görüntüsü diğerlerine göre kat kat güzel ve daha küçük :)
<h2>Birazcık  görelim </h2>
<img class="card-img-responsive" width="70%" src="/assets/img/v1.png"  alt="vites sistemi"><br><br>
bu arkadaş servo motor yardımı ile vites telinin kontrol edilmesini sağlar
* sıfır switchi vitesin 1 olmasını tetikler yani sistemin referans noktasıdır
* sayaç ise telin ne kadar çekildiği ya da salındığını sayar
* civataya servo motor başı girer.
<img class="card-img-responsive"  width="70%" src="/assets/img/s2.png"  alt="vites sistemi">

<img class="card-img-responsive" width="70%" src="/assets/img/sisr.png"  alt="vites sistemi">
 
 
<br><br>

Buraya kadar vites telini asılacak sistemi tanıdık... Şimdi Servo motora neler yaptık ona bakalım.

<img class="card-img-responsive" width="70%" src="/assets/img/s1.png"  alt="vites sistemi"><br><br>
servonun elektronik tüm elektronik elelmanlarını çıakrtıp onu bir redüktörlü motora dönüştürdük bu bize teli çekmek için yeterli gücü verir ve mg96 serisi motorun açı sorunlarında kurtarır açı demişken 
<img class="card-img-responsive" width="70%" src="/assets/img/s2.jpg"  alt="vites sistemi">
Servo motordaki açı sınırlayıcısını da çıkartıyoruz ve servonun çıkış milini vites telini aktaracak civataya girecek şekilde yontuyoruz .
<hr></hr>


<img class="card-img-responsive" width="70%" src="/assets/img/g1.jpg"  alt="vites sistemi"><br>
şekilde görüldüğü gibi elemanları bir araya getiriyoruz
kırmızı şeyin orada da rotary encoder 'ımız zincire bağlı bağımsız bir dişlide hareket ediyor
bu da bize pedalın hangi yönde döndüğünü anlamamızı sağlıyor 

en son sistemin elektronik kısımlarını da bir araya getirelimmm
<img class="card-img-responsive" width="70%" src="/assets/img/sisson.png"  alt="vites sistemi"><br>



kodlar ve açıklamaları elbette burda (ekler içinde teknik çizimler mevcut ):
[burada github'da](https://github.com/bymfd/velesbit)