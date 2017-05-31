<?php

use yii\db\Migration;

class m170515_091806_fill_book_table extends Migration
{
    public function up()
    {
        $this->batchInsert('book', ['id', 'description'], [
            ['1', 'Кузнецов Ф.Ф.  "Тихий Дон": судьба и правда великого романа / РАН. ИМЛИ. – М., 2005. – 864 с.'],
            ['2', 'Культура русской речи: Энциклопедический словарь-справочник / РАН. Институт русского языка им. В.В. Виноградова. – М. : Наука, Флинта, 2003. – 840 с.'],
            ['3', 'Калоев Б.А.  Осетины: Историко-этнографическое исследование / РАН. Институт этнологии и антропологии им. Н.Н. Миклухо-Маклая. – М. : Наука, 2004. – 471 с.'],
            ['4', 'История через личность: Историческая биография сегодня. – М. : Кругъ, 2005. – 720 с. (Серия "Образы истории").'],
            ['5', 'Калиганов И.И.  Веков связующая нить. Вопросы истории и поэтики славянских литератур и культур / РАН. Институт славяноведения. – М., 2006. – 602 с.'],
            ['6', 'Мансикка В.Й.  Религия восточных славян / РАН. ИМЛИ. – М., 2005. – 368 с.'],
            ['7', 'Макаров А.  В тени "Тихого Дона". Федор Крюков – забытый русский писатель. – М. : АИРО-ХХI, 2006. – 64 с. (Серия "АИРО – научные доклады и дискуссии. Темы для XXI века").'],
            ['8', 'Юго-Восточная Европа в эпоху кардинальных перемен/ РАН. Институт Европы. – М. : Изд-во "Весь Мир", 2007. – 352 с. (Серия "Старый Свет – новые времена").'],
            ['9', 'Славянский альманах 2005 / РАН. Институт славяноведения. – М. : Индрик, 2006. – 584 с.'],
            ['10', 'Славянский альманах 2004 / РАН. Институт славяноведения. – М. : Индрик, 2005. – 568 с.'],
            ['11', 'Славянский альманах 2002 / РАН. Институт славяноведения. – М. : Индрик, 2003. – 560 с.'],
            ['12', 'История России. Теоретические проблемы.Вып.2.М.. 2013. -383 c.'],
            ['13', 'Стивен Коэн и Советский Союз / Ассоциация исследователей российского общества (АИРО-XXI). – М : АИРО-XXI; РГТЭУ, 2008. – 244 с.'],
            ['14', 'Васильев А.  Африка – падчерица глобализации / РАН. Институт Африки. – М. : ИФ "Восточная литература", 2003. – 263 с.'],
            ['15', 'Щапов Я.Н.  Справочный инструментарий историка России / РАН. Институт российской истории. – М. : Наука, 2007. – 187 с.'],
            ['16', 'Историческая география России: Новые подходы / РАН. Институт российской истории. – М., 2004. – 208 с.'],
            ['17', 'Христианство и новая русская литература XVIII-XX веков: Библиографический указатель. 1800-2000 / РАН. Институт русской литературы (Пушкинский Дом). – СПб. : Наука, 2002. – 891 с.'],
            ['18', 'Эпоха 1812 года в судьбах России и Европы : Материалы Международной научной конференции (Москва, 8-11 октября 2012 г.) / РАН. Институт российской истории. – М., 2013. – 614 с., ил.'],
            ['19', 'Славянский альманах 2003 / РАН. Институт славяноведения. – М. : Индрик, 2004. – 560 с.'],
            ['20', 'Kusyk B.N., Yakovets Yu.V.  Russia 2050: Startegy of Innovative Break-Through. – Moscow : Ves Mir, 2005. – 546 p.'],
            ['21', 'Зайцев И.В.  Астраханское ханство / РАН. Институт востоковедения. – М. : ИФ "Восточная литература", 2004. – 303 с.'],
            ['22', 'Идеи и люди : Интеллектуальная культура Европы в новое время / РАН. Институт всеобщей истории. – М. : Аквилон, 2014. – 848 с. – (Образы истории).'],
            ['23', 'История романных форм в литературах Африки / РАН. ИМЛИ. – М. : Восточная литература, 2010. – 766 с.'],
            ['24', 'Свод памятников архитектуры и монументального искусства России: Ивановская область. Ч. 2. – М. : Наука, 2000. – 776 с.'],
            ['25', 'Быстрова И.В.  Советский военно-промышленный комплекс: проблемы становления и развития (1930-1980-е годы) / РАН. Институт российской истории. – М., 2006. – 704 с.'],
            ['26', 'Чжан Бинлинь.  Избранные произведения : 1894-1913 гг. / РАН. Институт востоковедения. – М. : Наука – Восточная литература, 2013. – 304 с.'],
            ['27', 'Бугай Н.Ф.  Проблемы репрессий и реабилитации граждан : история и историография (XX в – начало XXI в.) / РАН. Институт российской истории. – М. : Гриф и К, 2012. – 480 с.'],
            ['28', 'Щапова Ю.Л. Византийское стекло. М., 1998.-283с.'],
            ['29', 'Вендина Т.И.  Средневековый человек в зеркале старославянского языка / РАН. Институт славяноведения. – М. : Индрик, 2002. – 336 с.'],
            ['30', 'Как люди делают себя. Обычные россияне в необычных обстоятельствах : концептуальное осмысление восьми наблюдавших случаев. – М. : Логос, 2010. – 388 с.'],
            ['31', 'Зализняк А.А.  Древнерусское ударение: Общие сведения и словарь / РАН. Институт славяноведения. – М. : Языки славянской культуры, 2014. – 728 с.'],
            ['32', 'Муравьев-Апостол И.М.  Письма из Москвы в Нижний Новгород. – М. : Наука, 2002. – 271 с.'],
            ['33', 'Бюджет и налоги в экономической политике России : Монография / Центр проблемного анализа и государственно-управленческого проектирования. – М. : Научный эксперт, 2008. – 240 с.'],
            ['34', 'Иван Бунин и общество любителей российской словесности / Общество любителей российской словесности. – М. : Academia, 2007. – 380 с.'],
            ['35', 'Зиновьев А.А.  Восхождение от абстрактного к конкретному (на материале "Капитала" К. Маркса) / РАН. Институт философии. – М., 2002. – 321 с.'],
            ['36', 'Челышев И.А.  СССР-Франция: Трудные годы. 1938-1941 / РАН. Институт истории. – М., 1999. – 367 с.'],
            ['37', 'Черных В.А.  Летопись жизни и творчества Анны Ахматовой. Ч.1 : 1889 – 1917. – М. : Эдиториал УРСС, 1996. – 112 с.'],
            ['38', 'Черников В.Д.  Логические методы и их применение в economics / РАН. Институт Африки. – М., 1996. – 308 с.'],
            ['39', 'Эволюция, культура, познание / РАН. Институт философии. – М., 1996. – 167 с.'],
            ['40', 'Бызов Л.Г.  Контуры новорусской трансформации : Социокультурные аспекты формирования современной российской нации и эволюция социально-политической системы. – М. : РОССПЭН, 2013. – 390 с.'],
            ['41', 'Словарь русского языка XVIII века. Вып. 18 : Открытие – Пена / РАН. Институт лингвистических исследований. – СПб. : Наука, 2011. – 260 с.'],
            ['42', 'Словарь русского языка XVIII века. Вып. 19 : Пенат – Плангерд / РАН. Институт лингвистических исследований. – СПб. : Наука, 2011. – 238 с.'],
            ['43', 'Тер-Саркисянц А.Е.  Армяне. История и этнокультурные традиции. – М. : ИФ "Восточная литература", 1998. – 397 с.'],
            ['44', 'Археографический ежегодник за 2011 год / РАН. Отделение историко-филологических наук. Археографическая комиссия. Федеральное архивное агентство. – М. : Наука, 2014. – 512 с.'],
            ['45', 'Старикова Л.М. Театральная жизнь России в эпоху Анны Иоанновны. М., 1995.752с.'],
            ['46', 'Русско-монгольские отношения. 1654-1685. Сборник документов. Сост. Г.И.Слесарчук. – М. : ИФ "Восточная литература", 1996. – 560 с.: ил.(Материалы по истории русско-монгольских отношений).'],
            ['47', 'Военно-историческая антропология. Ежегодник, 2003/2004. Новые научные направления. – М. : РОССПЭН, 2005. – 464 с.'],
            ['48', 'Русско-индийские отношения в XIX в. Сборник архивных документов и материалов. – М. : ИФ "Восточная литература", 1997. – 374 с.'],
            ['49', 'Шенкар Одед. Китай: век ХХ1. Днепропетровск., 2005. – 208с.'],
            ['50', 'Гейденштейн Р. Записки о Московской войне (1578–1582).Рязань, 2005.-606 с.'],
            ['51', 'Безотосный В.М.  Разведка и планы сторон в 1812 году/ Государственный Исторический музей. – М. : РОССПЭН, 2005. – 288 с., ил.'],
            ['52', 'Таруашвили Л.И.  Тектоника визуального образа в поэзии античности и христианской Европы: К вопросу о культурно-исторических предпосылках ордерного зодчества. – М. : Языки русской культуры, 1998. – 376 с., 1 вклейка.'],
            ['53', 'Шмидт Пауль. Переводчик Гитлера. Смоленск, 2001 .-400с.'],
            ['54', 'Белоброва О.А.  Очерки русской художественной культуры XVI-XX веков / РАН. Институт русской литературы (Пушкинский Дом). – М. : Индрик, 2005. – 440 с., илл.'],
            ['55', 'Традиционное жилище народов России: XIX – начало XX в. / Отв. ред. Л.Н.Чижикова / РАН. Ин-т этнологии и антропологии им. Н.Н.Миклухо-Маклая. – М. : Наука, 1997. – 397 с.: ил.'],
            ['56', 'Труды Отдела древнерусской литературы / РАН. Институт русской литературы (Пушкинский дом). L. – СПб : Издательство "Дмитрий Буланин", 1997. – 864 с.'],
            ['57', 'Историческая экология и историческая демография. Сборник научных статей / РАН. Институт российской истории. – М. : РОССПЭН, 2003. – 384 с.'],
            ['58', 'Наука и ученые России в годы Великой Отечественной войны 1941 – 1945: Очерки, воспоминания, документы / РАН. ин-т истории естествознания и техники. Архив РАН. – М. : Наука, 1996. – 311 с.'],
            ['59', 'Исследования по источниковедению истории России (до 1917 г.): Сборник статей памяти В.И. Буганова / РАН. Институт российской истории. – М., 2001. – 299 с.'],
            ['60', 'Исследования по славянской диалектологии. Вып. 9: Методы тзучения территориальных и социаллных диалектов. К итогам опыта славянской диалектологии XX в. / РАН. Институт славяноведения. – М., 2004. – 320 с.'],
            ['61', 'Исследования по славянской диалектологии. Вып. 10: Терминологическая лексика материальной и духовной культуры балканских славян / РАН. Институт славяноведения. – М., 2004. – 398 с.'],
            ['62', 'Князев Ю.П.  Грамматическая семантика : Русский язык в типологической перспективе. – М. : Языки славянских культур, 2007. – 704 с.'],
            ['63', 'История и историки : Историографический вестник. 2009–2010 / РАН. Институт российской истории. – М. : Наука, 2012. – 368 с.'],
            ['64', 'Климов Г.А.,.  Словарь кавказских языков: Сопоставление основной лексики / РАН. Институт   языкознания. – М. : ИФ "Восточная литература", 2003. – 511 с.'],
            ['65', 'Щепанская Т.Б.  Культура дороги в русской мифоритуальной традиции XIX-XX вв. – М. : Индрик, 2003. – 528 с., ил. (Серия "Традиционная духовная культура славян. Современные исследования").'],
            ['66', 'Васильев К.В.  Истоки китайской цивилизации. – М. : ИФ "Восточная литература", 1998. – 319 с.'],
            ['67', 'Вдовин А.И.  Русский народ в национальной политике. ХХ век. – М. : Информационно-издательское агентство "Русский мир", 1998. – 448 с.'],
            ['68', 'Культура памяти: Сборник научных статей / Российский институт культурологии. – М. : Древлехранилище, 2003. – 276 с.'],
            ['69', 'Бордюгов Г.А.  Белое дело: Идеология, основы, режимы власти. Историографические очерки. – М., 1998. – 320 с.'],
            ['70', 'Экология этнических культур Сибири накануне XXI века. – СПб. : Наука, 1995. – 222 с.'],
            ['71', 'Славянский альманах 2001 / РАН. Институт славяноведения. – М. : Индрик, 2002. – 560 с.'],
            ['72', 'Славянский альманах 2006 / РАН. Институт славяноведения. – М. : Индрик, 2007. – 496 с.'],
            ['73', 'История и культура нанайцев. Историко-этнографические очерки / РАН. Институт истории, археологии и этноргафии народов Дальнего Востока. – СПб. : Наука, 2003. – 324 с.'],
            ['74', 'Библиография стран Африки. Указатель литературы на русском языке, опубликованной в СССР в 1968–1982 гг. / РАН. Институт Африки. – М. : ИФ "Восточная литература", 1997. – 479 с.'],
            ['75', 'Мудрак О.А.  Свод камчадальской лексики по памятникам XVIII века / РАН. Институт языкознания. – М. : ИФ "Восточная литература", 2008. – 288 с.'],
            ['76', 'Вепсы: История, культура и межэтнические контакты. сборник научных трудов / Карельский научный центр РАН; Институт языка, литературы и истории. – Петрозаводск : Издательство Петрозаводского гос. университета, 1999. – 189 с.'],
            ['77', 'Славянский альманах 2000 / РАН. Институт славяноведе. – М. : Индрик, 2001. – 480 с.'],
            ['78', 'Вести-Куранты: 1651-1652 гг.,1654-1656 гг.,1658-1660 гг. / РАН. Ин-т русского языка. – М. : Наука, 1996. – 224 с.'],
            ['79', 'Кознова И.Е.  XX век в социальной памяти российского крестьянства / РАН. Институт философии. – М., 2000. – 207 с.'],
            ['80', 'Кулешова О.В.  Притчи Дмитрия Мережковского : единство философского и художественного. – М. : Наука, 2007. – 214 с.'],
            ['81', 'Славянский альманах 1999 / РАН. Институт славяноведения. – М. : Индрик, 2000. – 368 с.'],
            ['82', 'Мир Д.И. Писарева. Вып 3. Исследования и материалы/ РАН. Институт мировой литературы им. А.М. Горького. – М. : ИМЛИ РАН, 2005. – 160 с.'],
            ['83', 'Экономика переходного периода. Очерки экономической политики посткоммунистической России (1991-1997) / Институт экономических проблем переходного периода. – М., 1998. – 1113 с.'],
            ['84', 'Козлов П.К.  Дневники Монголо-Тибетской экспедиции. 1923–1926 / РАН. Институт истории естествознания и техники им. С.И. Вавилова. – СПб. : Наука, 2003. – 1039 с. (Серия "Научное наследство". Т. 30).'],
            ['85', 'Вайнберг Б.И.  Этнография Турана в древности: VII в. до н.э.-VIII в. н.э. / РАН. Институт этнологии и антропологии им. Н.Н. Миклухо-Маклая. – М. : ИФ "Восточная литература", 1999. – 359 с., ил.'],
            ['86', 'Энгельгардт А.Н.  Из деревни 12 писем. 1872-1887. – СПб. : Наука, 1999. – 714 с.(Литературные памятники).'],
            ['87', 'История и историки: историографический вестник. 2005 / РАН. Институт российской истории. – М. : Наука, 2006. – 363 с.'],
            ['88', 'Гаврилова И.Н.  Демографическая история Москвы. Монография. – М. : Фаст-Принт, 1997. – 300 с.'],
            ['89', 'Восточнохристианская цивилизация : Цивилизационные активы и цивилизационные рамки национальной российской политики. Вып. 6(15) / Центр проблемного анализа и государственно-управленческого проектирования. – М. : Научный эксперт, 2009. – 144 с.'],
            ['90', 'Сорокин Д.Е. Россия перед вызовом. М., Наука, 2003. -237с.'],
            ['91', 'Неизвестный солдат Кавказской войны 1994-1996. Потери российских войск: погибшие, пропавшие без вести, пленные / Правозащитный центр "Мемориал". – М. : Звенья, 1997. – 190 с.'],
            ['92', 'Гиндин Л.А.  Гомер и история Восточного Средиземноморья. – М. : Изд. фирма "Восточная литература" РАН, 1996. – 327 с.'],
            ['93', 'Теляковский В.А.  Дневники Директора Императорских театров. 1898-1901. – М. : Артист. Режиссер. Театр, 1998. – 748 с.'],
            ['94', 'Гаврильева Р.С.  Одежда народа Саха конца XVII- середины XVIII века / АН Республики Саха (Якутия). – Новосибирск : Наука; Сибирское предприятие РАН, 1998. – 144 с.'],
            ['95', 'Этос религиозного опыта / РАН. Институт  философии. – М., 1998. – 130 с.'],
            ['96', 'В углу: Начало гражданской войны глазами русских писателей (П.Н. Краснов, Ф.Д. Крюков, И.А. Родионов). – М. : АИРО-XX, 2001. – 96 с.'],
            ['97', 'Культура средневековой Москвы: ист. ландшафты. В 3-х т. Т. 2: Домен московских князей в городских станах, 1271-1505 годы / РАН. Институт археологии. – М.: Наука, 2005. – 651 с. (Серия "Культура средневековой Москвы").'],
            ['98', 'Россия и Европа: дипломатия и культура. Вып. 4 / РАН. Институт всеобщей истории. – М. : Наука, 2007. – 303 с.'],
            ['99', 'Сахаров А.Н.  Исторические обретения на рубеже XXI века : очерки / РАН. Институт российской истории. – М. : Голден-Би, 2011. – 352 с.'],
            ['100', 'Саввинов А.И.  Традиционные металлические украшения якутов: XIX – начало XX века: (Историко-этнографическое исследование) / РАН. Сибирское отделение, Ин-т проблем малочисленных народов Севера. – Новосибирск : Наука, 2001. – 171 с.']
        ]);
    }

    public function down()
    {
        $this->delete('book', ['between', 'id', 1, 100]);
    }

    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
