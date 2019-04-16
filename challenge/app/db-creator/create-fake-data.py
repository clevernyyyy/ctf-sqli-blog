from faker import Faker
import random
import decimal

# tool for creating fake data
# first, declare variables

n = 30000          # number of rows to create
#schema="dbo"        # schema of db
table="dino_eggs"       # table in db
file_name = "inserts.txt" # file to create inserts into
dino_species_list = ['abelisaurus','achelousaurus','achillobator','acrocanthosaurus','adasaurus','aegyptosaurus','agathaumas','alamosaurus','allosaurus','ammosaurus','amphicoelias','anatosaurus','anchisaurus','apatosaurus','archaeopteryx','argentinosaurus','aublysodon','avimimus portentosus','bambiraptor','barapasaurus','barney','barosaurus','baryonyx','beipiaosaurus','brachiosaurus','brachylophosaurus','bruhathkayosaurus','buitreraptor','byronosaurus','camarasaurus','carcharodontosaurus','carnotaurus','caudipteryx','centrosaurus','ceratosaurus','chasmosaurus','claosaurus','coelophysis','coelurus','compsognathus','corythosaurus','cryolophosaurus ellioti','cryptovolans pauli','daspletosaurus','deinocheirus','deinonychus','doryaspis','diclonius','dilong paradoxus','dilophosaurus','dinosaurs','diplodocus','dromaeosaurus','dromiceiomimus','dryosaurus','edmontosaurus','efraasia','ekrixinatosaurus','elaphrosaurus','elaltitan','einiosaurus','eobrontosaurus','euoplocephalus','europasaurus','falcarius utahensis','fukuiraptor','fukuisaurus','gallimimus','gargoyleosaurus','gasosaurus','gastroliths','giganotosaurus','gondwanatitan','gorgosaurus','gryposaurus','gryponyx','hadrosaurids','hadrosaurus','haplocanthosaurus','herrerasaurus','hexinlusaurus','huanghetitan','hylaeosaurus','hypacrosaurus','hypsilophodon','Ichthyovenator','Iguanodon','Ilokelesia','Irritator','Indosuchus','Incisivosaurus','Isanosaurus','Isisaurus','Jainosaurus','Janenschia','Jingshanosaurus','Jobaria','Jubbulpuria','Judiceratops','Kakuru ','Kaatedocus','Kaijiangosaurus','Khaan','kentrosaurus','Kotasaurus','Kritosaurus','lambeosaurus','leaellynasaura','lesothosaurus','liaoceratops','lusotitan','lycorhinus','labocania','lusitanosaurus','maiasaura','mamenchisaurus','marginocephalians','marginocephalians1','mass extinction','megalosaurus','microraptor','muttaburrasaurus','Noasaurus','Nodosaurus','Nothronychus','Nanotyrannus','Nemegtosaurus','Neovenator','Nipponosaurus','Ningyuansaurus','ornithomimids','ornithomimus','ornithopods','ornithopods1','ouranosaurus','oviraptor','ohmdenosaurus','ojoceratops','oohkotokia','pachycephalosaurus','pachyrhinosaurus','paralititan','parasaurolophus','parvicursor','pentaceratops','Procompsognathus','protoavis','protoceratops','Qantassaurus','Qiaowanlong','Qianzhousaurus','Quaesitosaurus','Qiupalong','Quilmesaurus ','Quetecsaurus ','Rajasaurus','Rapetosaurus','Riojasaurus','Rhabdodon','Rhoetosaurus','Rahiolisaurus','Rapator','Ratchasimasaurus','Raptorex','Regnosaurus','Richardoestesia','Rinchenia','Rinconsaurus','Rubeosaurus','saltasaurus','saltopus','saltriosaurus','sarcosuchus','saturnalia','sauropodomorphas','sauroposeidon','saurornitholestes','Saurischian','segnosaurus','seismosaurus','sinornithosaurus','sinosauropteryx','spinosaurus','staurikosaurus','stegosaurus','stenonychosaurus','Struthiomimus','styracosaurus','suchomimus','tarbosaurus','tetrapod','thecodontosaurus','theories','therizinosaurus','theropods','thyreophora','titanosaurids','torvosaurus','triceratops','troodon','tyrannosaurus rex','ultrasauros','unaysaurus','utahraptor','Unenlagia','Unescoceratops','velociraptor','Valdosaurus ','Velafrons ','Venenosaurus ','Veterupristisaurus ','Vitakridrinda ','Vulcanodon','Walgettosuchus','Wannanosaurus','Wulagasaurus','Xenoceratops','Xenotarsosaurus','Xixianykus','Xuanhanosaurus','Xuanhuaceratops','Yangchuanosaurus','Yandusaurus','Yunnanosaurus','Yimenosaurus','Yutyrannus','Yixianosaurus','Yongjinglong','Yueosaurus','Zalmoxes ','Zhuchengtyrannus ','Zephyrosaurus ','zuniceratops','Zhanghenglong','Zhejiangosaurus','Zizhongosaurus','Zhuchengceratop']

f = open(file_name, "w")
for _ in range(n):
  fake = Faker()

  location = ', '.join(fake.location_on_land(coords_only=False))

  f.write("INSERT INTO {}(dinosaur_type, days_in_incubation, egg_color, egg_diamter, egg_weight, updated_date, location_found, time_zone) VALUES('{}', '{}', '{}', '{}', '{}', '{}', '{}', '{}');\n".format(
    table
    ,random.choice(dino_species_list).title()
    ,(str(decimal.Decimal(random.randrange(155, 389))/100 + random.randint(10, 90)) + ' days')
    ,fake.safe_color_name()
    ,(str(random.randint(30, 65)) + ' cm')
    ,(str(random.randint(211, 935)) + ' grams')
    ,fake.date_this_century(before_today=True, after_today=False)
    ,location
    ,fake.timezone()
  ))

f.close()
