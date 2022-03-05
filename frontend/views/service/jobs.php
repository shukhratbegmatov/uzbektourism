<?php

use yii\widgets\ListView;
use yii\widgets\LinkPager;
use yii\helpers\Html;

$data = \frontend\controllers\ServiceController::getAllAgreements2();
$lang = Yii::$app->language;
$this->title =  $data->{'name_'.$lang};
$this->params['breadcrumbs'][] = $data->{'name_'.$lang};
$this->params['titlebreadcrumbs'] = $data->{'name_'.$lang};
?>

<style>
    body{
        font-family: 'Open Sans', sans-serif !important;
    }
</style>

<title><?= $this->title; ?></title>
<div class="title"><?= Yii::t('app', 'Bo‘sh ish o‘rinlari')?></div>
<br>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Davlat xaridlari bo‘limi boshlig‘i')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>-&nbsp;moliya, iqtisodiyot va buxgalteriya yo&lsquo;nalishlarida oliy ma&rsquo;lumotga ega bo&lsquo;lgan; (xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>-&nbsp;moliya, iqtisodiyot va buxgalteriya yo&lsquo;nalishi bo&lsquo;yicha davlat organlari va tizim tashkilotlarida yoki&nbsp; korporativ yoki davlat xaridlari yo&lsquo;nalishi bo&lsquo;yicha&nbsp; korxona, tashkilot va muassasalarda kamida 3 yil ish stajiga ega bo&lsquo;lgan;</p>
                <p>-&nbsp;o&lsquo;zbek va rus tillarini mukammal bilishi;</p>
                <p>- UzASBO, dxarid.uzex.uz, shop.uzex.uz veb platformalaridan mustaqil foydalana olishi;</p>
                <p>- davlat xaridlari sohasida qonun hujjatlari bilishi;</p>
                <p>-&nbsp;axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>-&nbsp;normativ-huquqiy hujjatlar loyihalarini ishlab chiqishda ishtirok etgan, ularni ishlab chiqish tartib va talablaridan xabardor bo&lsquo;lishi;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni tahlil qilish, axborot-tahliliy ma&rsquo;lumotlarni tayyorlashda ishtirok etgan yoki tayyorlagan;</p>
                <p>-&nbsp;o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>-&nbsp;ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik, kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>     
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Moliya-iqtisodiyot departamenti Tushumlarni nazorat qilish bo‘limi yetakchi mutaxassisi')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>-&nbsp;moliya, iqtisodiyot va buxgalteriya yo&lsquo;nalishlarida oliy ma&rsquo;lumotga ega bo&lsquo;lgan; (xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>-&nbsp;moliya, iqtisodiyot va buxgalteriya yo&lsquo;nalishi bo&lsquo;yicha davlat organlari va budjet tashkilotlari, muassasalarida kamida 3 yil ish stajiga ega bo&lsquo;lgan;</p>
                <p>-&nbsp;o&lsquo;zbek va rus tillarini mukammal bilishi;</p>
                <p>- UzASBO, 1S platformalaridan mustaqil foydalana olishi;</p>
                <p>- Budjet hisobi milliy standartlari, budjet qonunchiligi, budjet tashkilotlarida buxgalteriya hisobini yuritish yo&lsquo;riqnomasini bilishi;</p>
                <p>- tashkilotlar bilan hisob-kitoblar va solishtirma dalolatnomalar tuza olishi;</p>
                <p>- axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>-&nbsp;normativ-huquqiy hujjatlar loyihalarini ishlab chiqishda ishtirok etgan, ularni ishlab chiqish tartib va talablaridan xabardor bo&lsquo;lishi;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni tahlil qilish, axborot-tahliliy ma&rsquo;lumotlarni tayyorlashda ishtirok etgan yoki tayyorlagan;</p>
                <p>-&nbsp;o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>-&nbsp;ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik, kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Ijro intizomi va murojaatlar bilan ishlash boshqarmasi bosh mutaxassisi (turizm, sport va madaniy meros ob’ektlari sohasida)')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>-&nbsp;Ijro intizomi va murojaatlar bilan ishlash bo&lsquo;yicha ko&lsquo;nikmalarga ega bo&lsquo;lgan: (oliy ma&rsquo;lumoti xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>-&nbsp;davlat organlari va tizim tashkilotlarida kamida <br />3 yil ish stajiga ega bo&lsquo;lgan;</p>
                <p>-&nbsp;norma ijodkorligi (Murojaatlar va ijro intizomi bo&lsquo;yicha mavjud normativ hujjatlar talablarini chuqur bilishi) bo&lsquo;yicha yetarli bilim va ko&lsquo;nikmaga ega bo&lsquo;lishi;</p>
                <p>-&nbsp;o&lsquo;zbek tilida mukammal ish yurita olishi;</p>
                <p>- ijro.gov.uz dasturida mukammal ishlay olishi;</p>
                <p>-&nbsp;axborot-kommunikatsiya texnologiyalarini yuqori darajada bilishi, jumladan Microsoft Word va Exsel dasturlarini mukammal bilishi;</p>
                <p>-&nbsp;o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>-&nbsp;ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik;</p>
                <p>-&nbsp;rahbariyat tomonidan berilgan topshiriqlarni belgilangan talabalarga asosan o&lsquo;z muddatida bajarilishini nazorat qilish va ta&rsquo;minlash;</p>
                <p>-&nbsp;mamlakatda o&lsquo;tkazilayotgan ijtimoiy-siyosiy islohotlardan xabardor bo&lsquo;lishi va ular bo&lsquo;yicha amalga oshirilayotgan ishlar mohiyatini chuqur anglay olish.</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
                <p><strong><em>&nbsp;</em></strong></p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Olimpiya sport turlarini rivojlantirish boshqarmasi boshlig‘i ')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>- jismoniy tarbiya va sport ma&rsquo;lumotiga ega bo&lsquo;lgan (xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>&nbsp;- davlat organlari, jismoniy tarbiya va sport tashkilotlarida 5 yil ish stajiga ega (shundan 2 yili rahbar lavozimida);</p>
                <p>-&nbsp;o&lsquo;zbek, rus va ingliz tillarini mukammal bilishi; -&nbsp;axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>-&nbsp;jismoniy tarbiya va sport sohasida normativ-huquqiy hujjatlar loyihalarini ishlab chiqishda ishtirok etgan, ularni ishlab chiqish tartib va talablaridan xabardor bo&lsquo;lishi;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni tahlil qilish, axborot-tahliliy ma&rsquo;lumotlarni tayyorlashda ishtirok etgan yoki tayyorlagan;</p>
                <p>-&nbsp;o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>-&nbsp;ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik, kasbiy etiket va ijro intizomi qoidalariga to&lsquo;liq rioya qilish;</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Metodologiya boshqarmasi bosh mutaxassisi')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>-&nbsp;Turizm, sport yoki ijtimoiy gumanitar yo&lsquo;nalishlarida oliy ma&rsquo;lumotga ega bo&lsquo;lgan; (xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>-&nbsp;davlat organlari va tizim tashkilotlarida kamida <br />3 yil ish stajiga ega bo&lsquo;lgan;</p>
                <p>-&nbsp;o&lsquo;zbek, rus va ingliz tillarini mukammal bilish kerak. Ingliz tili uchun - milliy sertifikat yoki&nbsp; IELTS 6,0, TOEFL IBT 72, 42, Cambridge Assessment English FCE xalqaro imtihon tizimlari bo&lsquo;yicha til bilish darajalari B1, V2 va undan yuqori bo&lsquo;lishi shart;</p>
                <p>-&nbsp;axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>-&nbsp;normativ-huquqiy hujjatlar loyihalarini ishlab chiqishda ishtirok etgan, ularni ishlab chiqish tartib va talablaridan xabardor bo&lsquo;lishi;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni tahlil qilish, axborot-tahliliy ma&rsquo;lumotlarni tayyorlashda ishtirok etgan yoki tayyorlagan;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni rus, ingliz yoki boshqa xorijiy tillarda zarur ma&rsquo;lumotlarni qidirish tahlil qilish;</p>
                <p>-&nbsp;o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>-&nbsp;ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik, kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Davlat-xususiy sheriklik loyihalarini amalga oshirish va tadbirkorlarni qo‘llab-quvvatlash boshqarmasi boshlig‘i')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>- Turizm, xalqaro munosabatlar, iqtisodiy, moliyaviy yo&lsquo;nalishlarida oliy ma&rsquo;lumotga ega bo&lsquo;lgan; (xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>- davlat organlari va tizim tashkilotlarida kamida</p>
                <p>5 yil ish stajiga ega bo&lsquo;lgan (shundan kamida 2 yili rahbar lavozimida);</p>
                <p>- o&lsquo;zbek, rus va ingliz tillarini mukammal bilish kerak. Ingliz tili uchun - milliy sertifikat yoki IELTS 6,5, TOEFL IBT 72, Cambridge Assessment English FCE xalqaro imtihon tizimlari bo&lsquo;yicha til bilish darajalari B2 va undan yuqori bo&lsquo;lishi shart;</p>
                <p>- axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>- o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>- ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik, kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p>- mamlakatda o&lsquo;tkazilayotgan ijtimoiy-siyosiy islohotlardan habardor bo&lsquo;lishi va ular bo&lsquo;yicha amalga oshirilayotgan ishlar mohiyatini chuqur anglay olish.</p>
                <p>- ish faoliyati davomida Respublika miqyosida doimiy tarzda xizmat safarlari amalga oshiriladi.</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Sport maktablari bilan ishlash va hududlarni sportga ixtisoslashtirish bo‘limi yetakchi mutaxassisi')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>-&nbsp;sport yo&lsquo;nalishlarida oliy ma&rsquo;lumotga ega bo&lsquo;lgan; (xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>-&nbsp;sport yo&lsquo;nalishi bo&lsquo;yicha davlat organlari va tizim tashkilotlarida kamida 3 yil ish stajiga ega bo&lsquo;lgan;</p>
                <p>-&nbsp;o&lsquo;zbek va rus tillarini mukammal bilish kerak.</p>
                <p>-&nbsp;axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>-&nbsp;normativ-huquqiy hujjatlar loyihalarini ishlab chiqishda ishtirok etgan, ularni ishlab chiqish tartib va talablaridan xabardor bo&lsquo;lishi;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni tahlil qilish, axborot-tahliliy ma&rsquo;lumotlarni tayyorlashda ishtirok etgan yoki tayyorlagan;</p>
                <p>-&nbsp;o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>-&nbsp;ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik, kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Sport federatsiyalari (uyushmalar) faoliyatini muvofiqlashtirish bo‘limi bosh mutaxassisi')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>- Bo&lsquo;lim bosh mutaxassisi lavozimida oliy ma&rsquo;lumotli, jismoniy tarbiya va sport ma&rsquo;lumotiga ega bo&lsquo;lgan, jismoniy tarbiya va sport tashkilotlarida 3 yil ish stajiga ega bo&lsquo;lgan shaxslar ishlashlari mumkin.</p>
                <p>Bo&lsquo;lim bosh mutaxassisi Bo&lsquo;lim boshlig&lsquo;i va vazir o&lsquo;rinbosari tavsiyasiga binoan, Vazir tomonidan lavozimga tayinlanadi va ozod etiladi.</p>
                <p>-&nbsp;o&lsquo;zbek, rus va ingliz tillarini mukammal bilish kerak. -&nbsp;axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>-&nbsp;normativ-huquqiy hujjatlar loyihalarini ishlab chiqishda ishtirok etgan, ularni ishlab chiqish tartib va talablaridan xabardor bo&lsquo;lishi;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni tahlil qilish, axborot-tahliliy ma&rsquo;lumotlarni tayyorlashda ishtirok etgan yoki tayyorlagan;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni rus, ingliz yoki boshqa xorijiy tillarda zarur ma&rsquo;lumotlarni qidirish tahlil qilish;</p>
                <p>-&nbsp;o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>-&nbsp;ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik, kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Ziyorat turizmini rivojlantirish departamenti direktori')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>- Turizm, xalqaro munosabatlar, yoki ijtimoiy gumanitar yo&lsquo;nalishlarida oliy ma&rsquo;lumotga ega bo&lsquo;lgan; (xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>- davlat organlari va tizim tashkilotlarida kamida</p>
                <p>5 yil ish stajiga ega bo&lsquo;lgan (shundan kamida 2 yili rahbar lavozimida);</p>
                <p>- o&lsquo;zbek, rus va ingliz tillarini mukammal bilish kerak. Ingliz tili uchun - milliy sertifikat yoki&nbsp; IELTS 6,5, TOEFL IBT 72, Cambridge Assessment English FCE xalqaro imtihon tizimlari bo&lsquo;yicha til bilish darajalari B2 va undan yuqori bo&lsquo;lishi shart;</p>
                <p>- axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>- diplomatik etiket, xalqaro uchrashuvlar, suhbat va muzokaralar olib borish va tantanali tadbirlar o&lsquo;tkazish, protokol&nbsp; yuritish, musulmon mehmondo&lsquo;stlik talablaridan habardor bo&lsquo;lishlik;</p>
                <p>- o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>- ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik; kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p>- mamlakatda o&lsquo;tkazilayotgan ijtimoiy-siyosiy islohotlardan xabardor bo&lsquo;lishi va ular bo&lsquo;yicha amalga oshirilayotgan ishlar mohiyatini chuqur anglay olish;</p>
                <p>- nomzodlar doimiy tarzda Samarqand shahrida ish faoliyati olib borilishiga rozilik bildirishlari lozim.</p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Xalqaro turistik-transport logistikasini rivojlantirish bo‘limi boshlig‘i')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>oliy ma&rsquo;lumotga ega bo&lsquo;lgan;</p>
                <p>- soha bo&lsquo;yicha davlat organlari va tizim tashkilotlarida kamida 3-5 yil ish stajiga ega bo&lsquo;lish;</p>
                <p>o&lsquo;zbek, rus va ingliz tillarini mukammal bilish kerak. Ingliz tili uchun - milliy sertifikat yoki&nbsp; IELTS 6,5, TOEFL IBT 72, 95, Cambridge Assessment English FCE xalqaro imtihon tizimlari bo&lsquo;yicha til bilish darajalari B2, S1va undan yuqori bo&lsquo;lishi shart;</p>
                <p>- diplomatik etiket, xalqaro uchrashuvlar, suhbat va muzokaralar olib borish, tantanali tadbirlar o&lsquo;tkazish va protokol yuritish;</p>
                <p>- axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>- o&lsquo;z fikr-mulohazalarini hamda soha rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>- ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik; kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p>- mamlakatda o&lsquo;tkazilayotgan ijtimoiy-siyosiy islohotlardan xabardor bo&lsquo;lishi va ular bo&lsquo;yicha amalga oshirilayotgan ishlar mohiyatini chuqur anglay olish.</p>
                <p><strong>&nbsp;</strong></p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>
<div id="print-content">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2"><?= Yii::t('app', 'Oliy va o‘rta maxsus ta’lim boshqarmasi boshlig‘i')?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <p><strong>Oylik maoshi</strong></p>
                <p>Shtat jadvali asosida, <em>(ustamalar bor)</em></p>
                <p><strong>Nomzodga qo&lsquo;yilgan talablar</strong></p>
                <p>-&nbsp;sport, turizm, iqtisodiyot va ta&rsquo;lim yo&lsquo;nalishlarida oliy ma&rsquo;lumotga ega bo&lsquo;lgan; (xorijiy va xalqaro oliy o&lsquo;quv yurtlarida tahsil olgan nomzodlar qo&lsquo;llab-quvvatlanadi);</p>
                <p>-&nbsp;sport, turizm, iqtisodiyot va ta&rsquo;lim yo&lsquo;nalishi bo&lsquo;yicha davlat organlari va tizim tashkilotlarida kamida 5 yil ish stajiga ega bo&lsquo;lgan (shundan 2 yili rahbar lavozimida);</p>
                <p>-&nbsp;o&lsquo;zbek va rus tillarini mukammal bilish kerak.</p>
                <p>-&nbsp;axborot-kommunikatsiya texnologiyalari savodxonligi, jumladan Microsoft Word, Exsel va Power Point dasturlarini bilishi;</p>
                <p>-&nbsp;ma&rsquo;lumotlarni tahlil qilish, axborot-tahliliy ma&rsquo;lumotlarni tayyorlashda ishtirok etgan yoki tayyorlagan;</p>
                <p>-&nbsp;o&lsquo;z fikr-mulohazalarini hamda Vazirlikka biriktirilgan sohalar rivoji uchun doimiy tarzda takliflarini taqdim qila olish;</p>
                <p>-&nbsp;ishga nisbatan mas&rsquo;uliyatlilik, halollik, hushmuomalalik, kasbiy etiket qoidalariga to&lsquo;liq rioya qilish;</p>
                <p><strong>&nbsp;</strong></p>
                <p><strong>Ish kunlari: </strong></p>
                <p>dushanba, seshanba, chorshanba, payshanba, juma. Dam olish kunlari: shanba, yakshanba. Ish vaqti: 09: 00 dan 18:00 gacha</p>
            </div>
        </div>
    </div>
</div>