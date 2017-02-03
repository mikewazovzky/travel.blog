@extends('locations.location')
@section('location')

<h2>Небольшая прогулка по Большому Каньону или Гранд Каньон для Чайников.</h2>


<h3>Общая информация</h3> 

<p>(пропустить и перейти к <a href="#report">отчету</a>)</p>

<img class="img-responsive center-block" style="margin-left: 10px; float: right; max-height: 250px; " src="{{ $images['001']['src'] }}">

<p> Расположенный в Аризоне Большой или Великий Каньон (<strong>Grand Canyon</strong>) – гигантское ущелье, промытое за миллионы 
	лет в скальных породах рекой Колорадо. Он является одной из самых знаменитых и популярных у туристов достопримечательностей 
	американского юго-запада.  Когда у меня впервые возникла идея посетить эти места, целью визита было именно посмотреть на 
	Гранд Каньон и океанское (атлантическое) побережье Калифорнии.</p>
	
<p>	Огромный каньон глубиной 1800 метров раскинулся на сотни (более 400) километров, и есть по крайней мере три области доступных 
	для организованного посещения туристами.</p>
	
<p>	Южный Край – <strong>South Rim</strong> (придумайте более удачный перевод на русский для слова Rim). Я был именно там и в 
	отчете повествование пойдет о нем. С точки зрения построения типичных туристических маршрутов (в том числе моего) он 
	расположен наиболее удачно и, соответственно, является наиболее посещаемым, обладает наиболее развитой инфраструктурой.</p>
	
<p>	Северный Край – <strong>North Rim</strong>, менее доступное и обустроенное, а потому более дикое и более привлекательное для 
	любителей природы место.</p>
	
<p>	Национальный парк Гранд Каньон расположен на территории Северного и Южного Рима. Въезд в парк платный, действует годовой 
	пропуск в национальные парки.  Как обычно, всю необходимую информацию можно найти на официальном сайте парка – см. полезные 
	ссылки внизу страницы.</p>
	
<p>	Западный Край – <strong>West Rim</strong> расположен в резервации индейцев хавасупай, несмотря на свою близость 
	к Лас-Вегасу (<strong>Las Vegas, NV,</strong> 2 часа езды) он не так популярен, нет таких грандиозных видов,  
	да и организованный местными жителями сервис вызывает много нареканий – к некоторым площадкам (<strong>Skywalk</strong> – 
	огромный стеклянный мост над пропастью) доступ возможен только в составе организованной группы с экскурсией, запрещено 
	фотографировать на свою технику (WTF?!).</p>
	
<p>	Для полноты картины нельзя не упомянуть расположенные на дне каньона водопады <strong>Havasu</strong>,  любителям природы 
	и пеших походов рекомендую погуглить самостоятельно <strong>“Havasu Water Falls”</strong> и подумать над возможностью 
	добраться до них.</p>

<h3>Как добраться</h3>

<p>	Ближайший крупный населенный пункт и международный аэропорт – Лас-Вегас (<strong>Las Vegas, NV</strong>). Расстояние от 
	Лас-Вегаса до Южного и Северного Рима примерно одинаковое и составляет  около 450 километров, поездка на автомобиле займет 
	около 5 часов с небольшими остановками, совсем без них вряд ли получится, так как есть на что посмотреть по пути.  
	Расстояние от Вегаса до Западного Рима около 200 километров, 2 часа на автомобиле.</p>
	
<p>	Оптимальным способом доставки себя себя к Гранд Каньону, как и вообще перемещения по штатам, является автомобиль. 
	В  Лас-Вегасе есть множество компаний продающих автобусные экскурсии к Гранд Каньону, на центральных смотровых площадках 
	Вы встретите огромное количество людей, проведших весь день в автобусе ради короткого осмотра Каньона (галочка, селфи, 
	пиво с гамбургером и видом на Каньон).</p>
	
<p>	Есть возможность осмотра Каньона в т.ч. с посадкой на дно с вертолета, существуют компании организующие водные походы по 
	реке Колорадо в глубине каньона.</p>
	
<p>	Туристическая инфраструктура парка организована типичным для США образом – множество смотровых площадок (viewpoints) 
	соединеных дорогами и тропинками . Помимо площадок,  расположенных на краях (на риме), есть тропы ведущие вглубь каньона к 
	реке Колорадо и оборудованные на них площадки. Карта парка расположена 
	<a href="http://www.nps.gov/grca/planyourvisit/maps.htm">здесь</a>. 
	На поверхности каньона расположены кафе, сувенирные лавки, стенды с картами, описанием маршрутов и другой полезной 
	информацией, в том числе большое количество (они везде!) плакатов, рассказывающих, как опасно приближаться к местным белкам 
	и кормить их. Изодранные в клочья люди, изображенные на плакате ввергают в ужас впечатлительных (типа меня) туристов, 
	немедленно захотелось увидеть (издалека) этого страшного зверя.</p>
	
<p>	По территории парка можно перемещаться на специально организованных шаттлах  или на автомобиле. При подъезде к парку 
	установлены электронные табло информирующие о наличии  свободных мест на парковках, если их нет оставляем машину на 
	перехватывающей парковке и пересаживаемся на шаттл. Несмотря на то, что я был в парке в пик туристического 
	сезона (начало августа),  существенных проблем с парковкой не было, если вы торопитесь (например на последний автобус в 
	сторону <strong>Hermit Rest</strong> :) нужно предусмотреть время на на поиск места для автомобиля.</p>
	
<p>	Система шаттлов состоит из нескольких маршрутов (4 в самом парке),  автобусы начинают курсировать с раннего утра (первые 
	в 4 часа, регулярное движение с 6) примерно до 8 вечера. Карту маршрутов и расписание (зависит от сезона) можно посмотреть
	<a href="http://www.nps.gov/grca/planyourvisit/shuttle-buses.htm">здесь</a>.</p>
	
<p>	На автомобиле можно проехать не везде, дорога (<strong>Hermit road</strong>) ведущая от <strong>Bright Angel</strong> 
	(одной из площадок расположенных в центральной части парка) на запад к <strong>Hermit Rest</strong> (самой дальней площадке) 
	для частного транспорта закрыта. Это не очень удобно, последний автобус забирает туристов примерно в 8 часов (точное время 
	в расписании указано как, через 30 минут после заката :), а западные смотровые площадки самые интересные для любителей
	фотографировать закаты. Если замешкаешься наблюдая за погруженем каньона в вечерние сумерки, придется возвращаться пешком.
	Расстояние, например, от <strong>Pima Point</strong>  до ближайшей парковки на станции <strong>Bright Angel</strong> 
	более 10 км. Не уверен, что эта приятная и интересная днем прогулка доставит удовольствие, будучи осуществленной 
	незапланировано и в темноте.</p>
	
<h3>Размещение</h3>

<p>	На мой взгляд в течение одного дня совместить длительный переезд от ближайших крупных городов (Лос-Анджелес или 
	Сан-Франциско) и полноценое знакомство с Великим Каньоном невозможно, соответсвенно необходимо искать ночлег недалеко от 
	Парка.</p>

<p>	В Южном Риме идеальным местом для ночлега являются гостиницы расположенные в самом Парке или Тасаяне 
	(<strong>Tusayan, AZ</strong>, 11 км, 15 минут на автомобиле), но забронировать там отель в пик туристического сезона мне 
	не удалось, нашел на booking.com и поселился в 
	<a href="https://www.booking.com/hotel/us/grand-canyon-inn.ru.html">Grand Canyon Inn and Motel</a>, 
	распооженном в Валле (<strong>Valle, AZ</strong>, 47 км, 35 минут). В зависимости от Вашего маршрута может оказаться 
	удобным размещение в Флагстафе (<strong>Flagstaff, AZ</strong>, 130 км, 1.5 часа) или Пэйдже (<strong>Page, AZ</strong>, 
	216 км, 2.5 часа), который является стратегическим пунктом лежащим на пересечении туристических маршрутов Аризоны и Юты.</p>
	
<p>	Ближайшие к Северному Риму населенные пункты Канаб (<strong>Kanab, UT</strong>, 130 км, около 2 часов) и тот же 
	Пэйдж (<strong>Page, AZ</strong>, 200 км, 2.5 часа).</p>
	
<p>	Несмотря на пугающие (по началу) расстояния, перемещаться на автомобиле достаточно комфортно, привлекательные виды по 
	сторонам, отличные свободные дороги.  По ночам нужно быть осторожным, на дороге не раз видел оленей, однажды прямо передо 
	мной на дорогу выскочил койот, замер в свете фар и дал себя как следует рассмотреть.</p>
	
<p>	Кроме того в Каньоне есть кэмпинги, где можно поставить палатку. Для ночевки в Каньоне нужно купить в информационом центре 
	специальное разрешение – пермит. Хождение по горам с огромным рюкзаками, палатками и спальниками – не мое, предпочитаю 
	короткие, в пределах одного дня, вылазки налегке, ужин в ресторане и сон в уютной кроватке.</p>
	
<h3>Сезон</h3>

<p>	Моя поездка в Гранд Каньон состоялась в начале (в первых числах) августа. В это время здесь, особено на дне каньона, 
	бывает очень жарко (до 100F и более, 40C). Пешие походы на дальние расстояния в такую погоду чреваты переутомлением и 
	обезвоживанием, нужно быть осторожным. Зимой наверху достаточно холодно, часть дорог закрывается на зиму. Оптимальное 
	время для посещения весна с  апреля по май и осень с сентября по ноябрь.</p>
	
<h3 id="report">Отчет. День 1</h3>

<p>	На Гранд Каньоне я планировал провести полтора дня - прогулка вдоль Рима в день приезда, ночевка и целый день на прогулки 
	по тропам ведущим вглубь каньона. Ехал из долины Огня (<strong>Valley Of Fire State Park</strong>). Поскольку мне повезло 
	с погодой (пасмурно и даже небольшой дождь :) я застрял в долине дольше, чем планировал и приехал в 
	Валле (<strong>Valle, AZ</strong>) достаточно поздно. По пути было много интересных мест, но я торопился – сегодня я 
	должен увидеть Гранд Каньон! Быстро заселившись в отель, точнее получив ключи и схему проезда к нему, так как по 
	указанному адресу был расположен только ресепшен, сам отель оказался в другом месте (совсем недалеко на другой стороне 
	шоссе, как выяснилось позже), я заторопился  к Гранд Каньону, чтобы успеть на последний шатл в сторону <strong>Hermit 
	rest</strong>. Припарковавшись на станции <strong>Bright Angel</strong>, место пришлось поискать и немного понервничать 
	– время идет,  я нашел автобусную остановку  и отправился в сторону <strong>Hermit Rest</strong>. Каньон был уже совсем 
	рядом, но я старался не смотреть в его сторону. На <strong>Mohave Point</strong> (дальше автобус ехать отказался) я 
	неспеша достал фотоаппарат, штатив и направился в сторону каньона … </p>

<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['002']['src'] }}">
</div>

<p>	На центральной площадке было довольно много народу, но отойдя немного в сторону я устроился усевшись на выступе на самом 
	краю пропасти (барьеров и ограждений нет) с потрясающим видом.</p>  

<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['003']['src'] }}">
</div>

<p>	Так состоялось мое знакомство с Великим Каньоном.</p>

<p>	С фотографической точки зрения первая встреча было не очень удачной, было пасмурно, 
<a href="https://www.google.ru/search?q=grand+canyon+sunset&newwindow=1&source=lnms&tbm=isch">таких фотографий</a>, 
увы,  не получилось.</p>

<p>	Продолжалось это удовольствие не долго, приехал автобус – последняя возможность выбраться к цивилизации. На завтра 
	грандиозные планы, поэтому в отель.  Отель оказался классическим деревянным мотелем в стиле “дикий запад”, достаточно 
	симпатичным и уютным.  Несмотря на отклонение от первоначальный плана, предполагавшего неспешную, на пару часов, 
	прогулку вдоль Каньона по тропе <strong>West Rim Trail</strong>, главная цель достигнута, я полон новых впечатлений. 
	День  удался.</p>

<h3>Отчет. День 2</h3>

<p>	Будильник звенит в 3:30, подъем! Шмотки в машину, ключ от номера в ящик “быстрый чекаут“ и в 04:10 я уже загружаюсь на 
	станции <strong>Grand Canyon Visitor Center</strong> в первый утренний <strong>Hikers' Express Bus</strong> везущий 
	небольшое число (не более 10 человек) весьма колоритных путешественников к площадке <strong>South Kaibab Trailhead</strong>. 
	Не более чем через 10 минут мы прибываем к началу тропы <strong>South Kaibab Trail</strong>, ведущей вниз на самое дно 
	Каньона. Пока я собирался с мыслями и паковал вещи,  приехавшие со мной спортивный дядечка налегке (только поясной ремень 
	с парой бутылок воды) и парень в ковбойской шляпе с рюкзаком отправились вниз по тропе. Вскоре (на часах без пятнадцати 
	пять) я последовал за ними.  Еще пара компаний с рюкзаками никуда не спешили, остались наверху, и больше я их не видел.</p>
	
<p>	На улице еще темно, тропу видно, что вокруг пока не понятно. Шагаю в темноте, но дыхание  каньона чувствуется – звуки, 
	ощущение огромной пустоты. Достаточно быстро начало светать и постепенно стали проявлятся силуэты каньона. Описать 
	увиденное словами словами достаточно сложно, но у меня было ощущение полного восторга и потрясающей бодрости.  
	С тропы <strong>South Kaibab Trail</strong> открываются лучшие виды на каньон, а находящиеся на ней (<strong>Ooh Aah 
	Point</strong>) и рядом с ее началом (<strong>Yaki Point</strong>) смотровые площадки считаются одними из лучших точек 
	для наблюдения за восходом и фотографирования каньона утром. Восход примерно в 5:30, но сегодня его не видно, пасмурно, 
	солнце начало проглядывать сквозь облака ближе часам к семи.</p>

<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['004']['src'] }}">
</div>

<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['005']['src'] }}">
</div>

<p>	Тропа находится в отличном состоянии и представляет собой фактически лестницу с не очень крутыми ступеньками</p>
    
<div class="image-solo">
	<img class="img-responsive center-block vertical" src="{{ $images['006']['src'] }}">
</div>

<p>	...	протяженностью 10 километров.</p>
<div class="row">
	<div class="image-item col-sm-6"><img class="img-responsive center-block" src="{{ $images['007']['src'] }}"></div>
	<div class="image-item col-sm-6"><img class="img-responsive center-block" src="{{ $images['008']['src'] }}"></div>	
</div>

<p>	Звуки в ущелье разносятся далеко и я периодически слышу топот копыт и позвякивание колокольчиков, чуть позже увидел внизу 
	вереницу мулов.</p> 
 
<div class="image-solo">
	<img class="img-responsive center-block vertical" src="{{ $images['009']['src'] }}">
</div> 

<p>	Думал, что скоро их догоню, но оказалось это не так просто. </p>

<p>	За спиной у  меня небольшой рюкзак с водой (2 литра) и едой (бутерброд и фрукты). Возможности пополнить запас воды и 
	спрятаться в тени на тропе нет.  Летом рекомендуется совершать прогулки по тропе только в ранние утренние часы, 
	особенно осторожным нужно быть если вы собираетесь подниматься по <strong>South Kaibab</strong> вверх и есть риск 
	оказаться на тропе в полуденную жару, в том числе из-за того Вы не рассчитали своих сил и подъем занял больше (может 
	оказаться существенно больше) времени,  чем вы планировали. В год спасатели вынуждены поднимать из каньона до сотни 
	незадачливых туристов. Мобильной связи в каньоне нет, чтобы вызвать помощь рекомендуется иметь при себе зеркало (днем) и 
	фонарик (ночью).</p>
	
<p>	Все фотографии в походе сделаны компактным фотоаппаратом (Sony RX-100M2). Зеркалку и штатив с собой брать не стал, о чем 
	по пути вниз (съемка в сумерках) сильно жалел, но после подъема это решение уже не кажется мне таким необоснованным.</p>
	
<p>	Я чувствовал необыхновенный прилив сил, и несмотря на частые остановки, чтобы посмотреть по сторонам и сделать пару 
	снимков, шагал достаточно быстро и постепенно прошел все “официальные” площадки.</p>
	
<table class="viewpoint"> 
	<caption>Площадки на тропе <strong>South Kaibab Trail</strong></caption>
	<tr><th>Площадка</th>		<th>Расстояние</th>					<th>Перепад высот</th>
	<tr><td>Ooh Aah Point</td>	<td>1.4 километра (0.9 мили)</td>	<td>230 метров (760 футов)</td>
	<tr><td>Cedar Ridge</td>	<td>2.4 километра (1.5 мили)</td>	<td>340 метро (1,120 футов)</td>
	<tr><td>Skeleton Point</td>	<td>4.8 километра (3 мили)</td>		<td>620 метров (2,040 футов)</td>
	<tr><td>Tip Off Point</td>	<td>7.1 километра (4.4 мили)</td>	<td>992 метра (3 260 футов)</td>
</table>

<p>Все промежуточные остановки отмечены столбиками. </p>

<div class="image-solo">
	<img class="img-responsive center-block vertical" src="{{ $images['010']['src'] }}">
</div> 

<p>	Каньон оказался многослойным, по мере спуска вниз пейзаж вокруг существенно меняется постепенно открывая новые уровни.</p>

<div class="row">
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['011']['src'] }}"></div>
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['012']['src'] }}"></div>
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['013']['src'] }}"></div>	
</div>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['014']['src'] }}"/>
</div> 

<p>	Добравшись до <strong>Tip Off</strong> пришлось задуматься над вариантами дальнейшего маршрута.</p>

<p>	Вообще на дно каньона c Южного Рима идет две тропы,   вторая – <strong>Bright Angel Trail</strong>.  Она длиннее (14 
	километров), не такая крутая, как <strong>South Kaibab Trail</strong> и лучше обустроена – на станциях можно пополнить 
	запасы воды, в нижней части тропа проходит вдоль ручья и примерно половина пути проходит в тени скал. Главный недостаток 
	тропы в том, что в нижней части с нее видно только расщелину по которой она проходит и фантастических видов каньона вы 
	не увидете. Обе тропы пересекаются внизу у реки (<strong>Bright Angel Campground</strong>), оттуда же стартует тропа 
	<strong>North Kaibab Trail</strong> ведущая на вершину северного рима каньона.</p>
	
<p>	Кроме того есть тропа <strong>Tonto Trail</strong> соедияющая <strong>Tip Off point</strong> с <strong>Indian 
	Garden</strong> – одной из станций  примерно в середине <strong>Bright Angel Trail</strong> без спуска на дно каньона.</p>

<p>	Схема трэйлов из официального буклета парка.</p>
<img class="img-responsive center-block" src="{{ $images['000']['src'] }}"/>

<p>	Прочитав в буклете и на сайте предупреждение “не надо ходить к реке”</p>

<div class="warning">
	<p> <strong>Warning!</strong><br>Hiking to the river and back in one day is not recommended due to long distances, extreme temperature changes, and
		a near 5,000-foot (1,500 m) elevation change each way. If you think you have the fitness and experience to attempt this 
		<em><strong>extremely strenuous</strong></em> hike, please seek the advice of a park ranger at the Backcountry Information Center.<p>
</div>

<p>	я планировал пойти именно по <strong>Tonto Trail</strong>, но проход по ней в западном направлении был по 
	неизвестным мне причинам закрыт (знак “do not pass”). Времени было немного, пасмурно, не жарко, и я решил отправиться вниз 
	по <strong>South Kaibab Trail</strong> по учаcтку <strong>Tip Off – Bright Angel Campground</strong>, что составило 
	еще  – 4.2 километра (2.6 миль) c перепадом высот 463 метра (1 520 feet).</p>
	
<p>	На этом участке мне встретилась карабкающаяся вверх забавная группа из 2 жизнерадостных молодых людей с огромными рюкзакам
	(“Come on! You are almost there! – А-на-на!”) и отставшего от них обливающего потом весьма упитанного товарища (налегке, 
	рюкзак у него уже забрали), каждый шаг которому явно давался с трудом. Парням оставалось идти вверх примерно 8 из 10 
	километрв, и эта картина заставила меня в новом свете взглянуть на предстоящий мне подъем.</p>
	
<p>	В скором времени открылись виды на реку, которая все ближе.</p>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['015']['src'] }}"/>
</div> 

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['016']['src'] }}"/>
</div> 

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['017']['src'] }}"/>
</div> 

<p>	Через реку можно перейти по навесному мосту.</p>

<div class="row">
	<div class="image-item col-sm-6"><img class="img-responsive center-block" src="{{ $images['019']['src'] }}"></div>
	<div class="image-item col-sm-6"><img class="img-responsive center-block" src="{{ $images['020']['src'] }}"></div>	
</div>

<p>	Почти в самом низу мне встретилась группа ковбоев на мулах, выглядят колоритно.</p>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['021']['src'] }}"/>
</div> 

<p>	И вот, наконец, я внизу. Спуск занял примерно два с половиной часа.</p> 

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['022']['src'] }}"/>
</div> 

<p>	Выглянуло солнце разогнав остатки облаков и осветив весь каньон, стало достаточно жарко. Пляж реки Колорадо оказался 
	отличным местом, чтобы умыться и отдохнуть. Купаться не рекомендуют.</p>

<div class="warning">
	<h3>Warning!</h3>
	<p> The Colorado River is fast, wide, and a cold 46°F (8°C) year-round. Do not swim in the river — you will perish!</p>
</div>

<p>	Когда смотришь на каньон снизу, виден только нижний уровень (“слой”)  скал, выглядят они как самые обычные горы, такого 
	грандиозного впечатления, как сверху каньон не производит.</p>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['023']['src'] }}"/>
</div> 

<p>	Индейцы жили здесь, есть следы древних поселений.</p>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['024']['src'] }}"/>
</div> 

<p>	Немного вверх по реке есть еще один мост. От него начинается тропа <strong>Bright Angel Trail</strong>.</p>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['025']['src'] }}"/>
</div> 

<p>	Перекресток, тропа <strong>North Kaibab Trail</strong> ведет к Северному Риму каньона.</p>

<div class="image-solo">
    <img class="img-responsive center-block vertical" src="{{ $images['026']['src'] }}"/>
</div> 

<p>	Отдохнув и погуляв немного (примерно час) внизу неспешно отправляюсь в обратный путь по <strong>Bright Angel 
	Trail</strong>. Тропа идет вдоль ручья, присутствует растительность, в любой момент можно ополоснуться прохладной водой 
	и отдохнуть в тени.</p>
    
<div class="image-solo">
    <img class="img-responsive center-block vertical" src="{{ $images['027']['src'] }}"/>
</div> 

<p>	По тропе прямо на меня выскакивает пара оленей, пугаются и прячутся в растущих в ручье кустах. 
	Близко к себе не подпускают.</p>

<p>	За все время прогулки, кроме экспедиции на мулах, группы из 3-х бэкпекеров и парня в ковбойской шляпе, с которым мы пару 
	раз догоняли друг друга на привалах, я встретил только пару крепких девчонок в спортивных трусах. Они спустились к реке, 
	когда я уходил с пляжа, и вскоре бегом(!) обогнали меня. У них не было с собой ни рюкзаков, ни воды, похоже что спуск в 
	каньон и обратно был для них чем-то вроде утренней пробежки.</p>
	
<p>	Большую часть пути я проделал в абсолютном одиночестве окруженный звенящей тишиной.  На станции Indian Garden (нижняя 
	площадка на тропе) я впервые встретил заметное скопление людей. Многие туристы совершают пешие прогулки по <strong>Bright 
	Angel Trail</strong> до одной из станций и обратно. Именно такое позновательное и полезное для здоровья времяпровождение 
	рекомендует информационый центр парка.</p>
	
<p>	После <strong>Indian Garden</strong> растительность сходит на нет, виды на каньон становятся похожими на вид с верхних 
	смотровых площадок.</p>
    
<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['028']['src'] }}"/>
</div> 

<br>

<div class="row">
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['029']['src'] }}"></div>
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['030']['src'] }}"></div>
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['031']['src'] }}"></div>	
</div>

<p>	Люди встречаются все чаще и постепенно их поток становится постоянным. Жарко, идти вверх гораздо труднее, по-немногу 
	накапливается усталость, скорость и энтузиазм падают. Чем ближе к вершине тем чаще встречаются станции для отдыха. 
	Привалы занимают все больше времени.</p>
	
<table class="viewpoint"> 
	<caption>Площадки на тропе <strong>Bright Angel Trail</strong></caption>
	<tr><th>Площадка</th>			<th>Расстояние до верха</th>		<th>Перепад высот</th>
	<tr><td>Indian Gardens</td>		<td>14.4 километра (9 миль)</td>	<td>925 метров (3 040 футов)</td>
	<tr><td>3-Mile Resthouse</td>  	<td>9.6 километра (6 миль)</td>		<td>645 метров (2 120 футов)</td>
	<tr><td>1½-Mile Resthouse</td>	<td>4.8 километра (3 мили)</td>		<td>340 метров (1 120 футов)</td>
	<tr><td>Lower Tunnel</td> 		<td>2.8 километра (1.7 мили)</td>	<td>180 метров (590 футов)</td>
	<tr><td>Upper Tunnel</td>		<td>0.6 километра (0.4 мили)</td>	<td>20 метров (60 футов)</td>
</table>

<p>	На верхних остановках я, наконец, встретил легендарных белок. Они довольно настойчиво вымогают еду, некоторые заняты 
	откровенным грабежом</p>
    
<div class="image-solo">
    <img class="img-responsive center-block tmp" src="{{ $images['032']['src'] }}"/>
</div>
 
<div class="row">
	<div class="image-item col-sm-6"><img class="img-responsive center-block tmp" src="{{ $images['033']['src'] }}"></div>
	<div class="image-item col-sm-6"><img class="img-responsive center-block tmp" src="{{ $images['035']['src'] }}"></div>		
</div>

<p>	Некоторые просто любуются окружающим пейзажами.</p>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['036']['src'] }}"/>
</div> 

<p>	Наконец я наверху – <strong>Bright Angel Trailhead</strong>.Подъем занял у меня более 5 часов, на часах около двух. 
Последние сотни метров дались с трудом.</p>

<p>	Наверху днем довольно много народу, большинство – организванные  туристы, перемещающихся большими группами. 
	Искренне жаль людей, для большинства которых знакомство с каньоном ограничится его осмотром с центральных площадок в 
	толпе туристов.</p>

<p>	Передохнув и пообедавв кафе, я  еду смотреть восточное побережье каньона.</p>

<p>	По пути встречается крупный олень с шикарными рогами. Все проезжающие мимо бросают машины прямо на дороге, бегут смотреть 
	и фотографировать красавца. Он совершенно не боится, позволяет подойти к себе совсем близко.</p>

<div class="image-solo">
    <img class="img-responsive center-block vertical" src="{{ $images['037']['src'] }}"/>
</div> 

<p>	Дальняя восточная смотровая площадка – <strong>Desert View Point</strong>.</p>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['039']['src'] }}"/>
</div> 

<br>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['040']['src'] }}"/>
</div> 
<p>	Башня с видом на каньон – <strong>Desert View Tower</strong>.</p>

<div class="image-solo">
    <img class="img-responsive center-block vertical" src="{{ $images['041']['src'] }}"/>
</div> 

<p>Вечер. С закатом опять не очень повезло.</p>

<div class="image-solo">
    <img class="img-responsive center-block" src="{{ $images['042']['src'] }}"/>
</div> 

<p>	Прощальный взгляд на Каньон и направляюсь в город Пэйдж (<strong>Page AZ</strong>).</p>

<p>	Готовясь к поездке я прочитал разные отзывы о Каньоне. Есть мнение, что ничего особенного он не представляет – заурядная 
	трещина в земле, особенно в сравнении с другими чудесами юго-запада. Я считаю – <strong>Каньон потрясающий!</strong> 
	Мое самое сильное впечатление и место куда хочется вернуться.</p>
	
<h3>Рекомендации</h3>

<p>	Выбрать  для посещения не жаркий сезон, когда прогулки по каньону относительно безопасны.</p>

<p>	Предусмотреть больше времени для Гранд Каньона вообще и для пеших прогулок в частности.  </p>

<p>	Спустится вниз, туда где нет толп туристов, проникнуться духом Великого Каньона.</p>

<p>	При следующем посещении парка я бы запланировал </p>

<ul>
	<li>больше времени для прогулок по West Rim Trail, вечером с фотоаппаратом и надеждой увидеть каньон рассвеченный лучами закатного солнца,</li>
	<li>провести спокойное утро на восточных площадках, посмотреть на рассвет.</li>
</ul>

<p>	Интересной кажется идея пешего дневного перехода с Южного на Северный рим. Серьезный поход, расстояние около 40 километров, 
	набор высоты – те же 1.8 километра. Огранизация такого похода требует или группы поддержки, кто-то должен забрать Ваc в 
	пункте назначения (проехав по объездной дороге примерно 350 километров), или возвращения в исходную точку с ночевкой в 
	отеле на другом “берегу” каньона.</p>
	
<p>	Ну и поход к водопадам <strong>Havasu</strong>, хотя это совсем другая история.</p>

<h3>Полезные ссылки</h3>

<p>	<a href="http://www.nps.gov/grca/index.htm">Сайт</a> национального парка.</p>

<p>	<a href="http://www.nps.gov/grca/learn/news/upload/sr-pocket-map.pdf">Карта</a> парка.</p>

<p>	Информация о <a href="http://www.nps.gov/grca/planyourvisit/shuttle-buses.htm">системе шатлов</a> на территории парка.</p>

<p>	<a href="http://www.nps.gov/grca/planyourvisit/upload/corridor_map.pdf">Схема пеших маршрутов</a> в парке.</p>

<p>	<a href="http://forum.awd.ru/viewtopic.php?p=4430261#p4430261">Подборка отчетов</a><strong style="color:blue;">
	seaagal</strong> на форуме Винского, подсказавшая идею пешего похода в Каньон.</p>

@stop