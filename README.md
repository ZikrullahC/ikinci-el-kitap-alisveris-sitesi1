
## İkinci El Kitap Alışveriş Sitesi
Bu proje, kullanıcıların ikinci el kitapları satabileceği bir web sitesi uygulamasını içermektedir. Aşağıda projeyi çalıştırmak ve temel işlevleri kullanmak için adımlar açıklanmıştır:

## Projeyi Çalıştırma
Öncelikle projenin kodlarını indirin ve XAMPP veya benzeri bir web sunucusu uygulamasının htdocs klasörüne yerleştirin.
XAMPP uygulamasını başlatın ve Apache ve MySQL'i başlatmak için "Start" düğmesine tıklayın. Bu şekilde yerel sunucunuz ve online veritabanınız çalışır hale gelecektir.
Tarayıcınızda localhost adresini ziyaret ederek kendi hosting sayfanıza erişebilirsiniz. Burada htdocs klasöründeki dosya ve klasörler listelenecektir. Projenin bulunduğu klasöre girerek index.php dosyasını çalıştırabilirsiniz. Bu sayede ana sayfa görüntülenecektir.

## Veritabanı Oluşturmak İçin
Aşağıdaki adımları takip ederek, projede kullanılacak olan veritabanını ve tabloları oluşturabilirsiniz:

Tarayıcınızda XAMPP veya benzeri bir web sunucusu kullanarak http://localhost:port_numarası/phpmyadmin adresine gidin. (port_numarası, XAMPP ayarlarında belirttiğiniz port numarasıdır)
Açılan phpMyAdmin arayüzünde "SQL" butonuna tıklayın.
Karşınıza çıkan SQL editöründe, projenin içerisinde bulunan veritabanı oluşturma SQL kodunu kopyalayın ve yapıştırın.
SQL kodunu çalıştırmak için "Git" butonuna tıklayın. Bu şekilde veritabanı ve ilgili tablolar oluşturulmuş olacaktır.
Lütfen, "port_numarası" yerine kullandığınız web sunucusunun port numarasını girerek işlemleri gerçekleştirin. Bu adımları takip ederek veritabanını oluşturabilir ve projeyi çalışır hale getirebilirsiniz.
     
     
## Kayıt Olmak İçin
Kayıt ol butonuna tıkladığınızda kayit.php dosyası çalıştırılacak ve kayıt formu görüntülenecektir. Bu formu doldurduktan sonra kayıt işlemi tamamlanacaktır.

## Giriş Yapmak İçin
Kayıt olduktan sonra "Giriş Yap" butonuna tıklayarak girisyap.php dosyasını çalıştırabilirsiniz. Bu sayfa, kullanıcıdan e-posta ve şifre bilgilerini isteyen bir giriş ekranı gösterecektir. Gerekli bilgiler doğru şekilde girildiğinde, kullanıcı kisiselekran.php dosyasına yönlendirilecek ve kişisel ekranı görüntülenecektir.

## Kişisel Ekran
Bu ekranda kullanıcı için aşağıdaki seçenekler mevcuttur:

## İlan Ver:
Bu butona tıklandığında ilanver.php dosyası çalıştırılacak ve ilan verilecek kitabın özellikleri bir form aracılığıyla kullanıcıdan alınacak ve veritabanına işlenecektir.

## İlan Görüntüle:
Bu buton ilangoruntule.php dosyasını çalıştıracak ve verilen ilanlar görüntülenecektir.

## İlan Sil:
Bu buton silmelistesi.php dosyasını çalıştıracak ve ekranda verilen ilanların listesi görüntülenecektir. İlanların yanındaki "Sil" butonuna tıklandığında, ilanın ID'si ilansil.php dosyasına gönderilecek ve ilan silinecektir.

## İlan Güncelle:
Bu buton guncellelistesi.php dosyasını çalıştıracak ve ilanların listesi yanında "Güncelle" butonu görüntülenecektir. "Güncelle" butonuna basıldığında, güncellenecek ilanın ID'si guncelle.php dosyasına gönderilecek ve ilanı güncellemek için bir ilan formu görüntülenecektir. Form üzerindeki "Güncelle" butonuna basıldığında, güncellenecek ilanın ID'si guncelkaydet.php dosyasına gönderilecek ve ilan güncellenecektir.



