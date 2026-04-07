// Système de traduction multilingue pour le site Linkretz
// Langues supportées : FR, EN, ES, PT, IT, DE, ZH, TR

const languages = {
    fr: { flag: 'fi-fr', label: 'Français' },
    en: { flag: 'fi-us', label: 'English' },
    es: { flag: 'fi-es', label: 'Español' },
    pt: { flag: 'fi-pt', label: 'Português' },
    it: { flag: 'fi-it', label: 'Italiano' },
    de: { flag: 'fi-de', label: 'Deutsch' },
    zh: { flag: 'fi-cn', label: '中文' },
    tr: { flag: 'fi-tr', label: 'Türkçe' }
};

const translations = {
    // Header
    "Agence Linkretz": {
        en: "Linkretz Agency", es: "Agencia Linkretz", pt: "Agência Linkretz", it: "Agenzia Linkretz", de: "Agentur Linkretz", zh: "Linkretz 旅行社", tr: "Linkretz Ajansı"
    },

    // Menu client
    "Accueil": {
        en: "Home", es: "Inicio", pt: "Início", it: "Home", de: "Startseite", zh: "首页", tr: "Ana Sayfa"
    },
    "Contact": {
        en: "Contact", es: "Contacto", pt: "Contato", it: "Contatto", de: "Kontakt", zh: "联系方式", tr: "İletişim"
    },
    "Tour-opérateurs": {
        en: "Tour Operators", es: "Turoperadores", pt: "Operadores turísticos", it: "Tour operator", de: "Reiseveranstalter", zh: "旅游运营商", tr: "Tur Operatörleri"
    },
    "Nous contacter": {
        en: "Contact Us", es: "Contáctenos", pt: "Contacte-nos", it: "Contattaci", de: "Kontaktieren Sie uns", zh: "联系我们", tr: "Bize Ulaşın"
    },
    "Connexion": {
        en: "Sign In", es: "Iniciar sesión", pt: "Entrar", it: "Accedi", de: "Anmelden", zh: "登录", tr: "Giriş Yap"
    },

    // Menu admin
    "Gestion des employés": {
        en: "Employee Management", es: "Gestión de empleados", pt: "Gestão de funcionários", it: "Gestione dipendenti", de: "Mitarbeiterverwaltung", zh: "员工管理", tr: "Çalışan Yönetimi"
    },
    "Gestion des tour-opérateurs": {
        en: "Tour Operator Management", es: "Gestión de turoperadores", pt: "Gestão de operadores turísticos", it: "Gestione tour operator", de: "Reiseveranstalterverwaltung", zh: "旅游运营商管理", tr: "Tur Operatörü Yönetimi"
    },
    "Modification du mot de passe": {
        en: "Change Password", es: "Cambiar contraseña", pt: "Alterar senha", it: "Modifica password", de: "Passwort ändern", zh: "修改密码", tr: "Şifre Değiştir"
    },
    "Déconnexion": {
        en: "Log Out", es: "Cerrar sesión", pt: "Sair", it: "Disconnetti", de: "Abmelden", zh: "退出", tr: "Çıkış Yap"
    },

    // Menu employé
    "Liste des employés": {
        en: "Employee List", es: "Lista de empleados", pt: "Lista de funcionários", it: "Lista dipendenti", de: "Mitarbeiterliste", zh: "员工列表", tr: "Çalışan Listesi"
    },
    "Demande d'information": {
        en: "Information Request", es: "Solicitud de información", pt: "Pedido de informação", it: "Richiesta di informazioni", de: "Informationsanfrage", zh: "信息请求", tr: "Bilgi Talebi"
    },

    // Index - Sections
    "Qui sommes-nous ?": {
        en: "Who are we?", es: "¿Quiénes somos?", pt: "Quem somos nós?", it: "Chi siamo?", de: "Wer sind wir?", zh: "关于我们", tr: "Biz Kimiz?"
    },
    "Coordonnées": {
        en: "Contact Details", es: "Datos de contacto", pt: "Coordenadas", it: "Recapiti", de: "Kontaktdaten", zh: "联系方式", tr: "İletişim Bilgileri"
    },
    "Horaires d'ouverture": {
        en: "Hours of Operation", es: "Horarios de apertura", pt: "Horário de funcionamento", it: "Orari di apertura", de: "Öffnungszeiten", zh: "营业时间", tr: "Çalışma Saatleri"
    },
    "Aucune horaire n'a été enregistré": {
        en: "No schedule has been recorded.", es: "No se ha registrado ningún horario.", pt: "Nenhum horário foi registrado.", it: "Nessun orario è stato registrato.", de: "Kein Zeitplan wurde erfasst.", zh: "暂无营业时间记录。", tr: "Henüz çalışma saati kaydedilmedi."
    },

    // Index - Contenu
    "Une agence familiale située à Chantilly, spécialisée dans la vente de séjours conçus par des tour-opérateurs.": {
        en: "A family agency located in Chantilly, specializing in the sale of stays designed by tour operators.",
        es: "Una agencia familiar ubicada en Chantilly, especializada en la venta de estancias diseñadas por turoperadores.",
        pt: "Uma agência familiar localizada em Chantilly, especializada na venda de estadias concebidas por operadores turísticos.",
        it: "Un'agenzia familiare situata a Chantilly, specializzata nella vendita di soggiorni progettati da tour operator.",
        de: "Eine Familienagentur in Chantilly, spezialisiert auf den Verkauf von Reisen, die von Reiseveranstaltern konzipiert wurden.",
        zh: "一家位于尚蒂伊的家庭旅行社，专门销售由旅游运营商设计的度假产品。",
        tr: "Chantilly'de bulunan, tur operatörleri tarafından tasarlanan tatil satışında uzmanlaşmış bir aile ajansı."
    },
    "Nous vous proposons également les services suivants :": {
        en: "We also offer the following services:",
        es: "También le ofrecemos los siguientes servicios:",
        pt: "Também oferecemos os seguintes serviços:",
        it: "Vi offriamo anche i seguenti servizi:",
        de: "Wir bieten Ihnen auch folgende Dienstleistungen an:",
        zh: "我们还提供以下服务：",
        tr: "Ayrıca aşağıdaki hizmetleri sunuyoruz:"
    },
    "la vente de billets d'avion ou de train.": {
        en: "the sale of plane or train tickets.",
        es: "la venta de billetes de avión o tren.",
        pt: "a venda de bilhetes de avião ou comboio.",
        it: "la vendita di biglietti aerei o ferroviari.",
        de: "den Verkauf von Flug- oder Zugtickets.",
        zh: "销售飞机票或火车票。",
        tr: "uçak veya tren bileti satışı."
    },
    "la location de voitures, de villas ou d'appartements.": {
        en: "rental of cars, villas or apartments.",
        es: "el alquiler de coches, villas o apartamentos.",
        pt: "o aluguer de carros, vilas ou apartamentos.",
        it: "il noleggio di auto, ville o appartamenti.",
        de: "die Vermietung von Autos, Villen oder Wohnungen.",
        zh: "租赁汽车、别墅或公寓。",
        tr: "araba, villa veya daire kiralama."
    },
    "la réservation de chambres d'hôtel.": {
        en: "booking hotel rooms.",
        es: "la reserva de habitaciones de hotel.",
        pt: "a reserva de quartos de hotel.",
        it: "la prenotazione di camere d'albergo.",
        de: "die Buchung von Hotelzimmern.",
        zh: "预订酒店客房。",
        tr: "otel odası rezervasyonu."
    },
    "l'organisation de voyage à la carte.": {
        en: "the organization of tailor-made travel.",
        es: "la organización de viajes a medida.",
        pt: "a organização de viagens personalizadas.",
        it: "l'organizzazione di viaggi su misura.",
        de: "die Organisation von maßgeschneiderten Reisen.",
        zh: "定制旅行的组织。",
        tr: "kişiye özel seyahat organizasyonu."
    },
    "Batiment B": {
        en: "Building B", es: "Edificio B", pt: "Edifício B", it: "Edificio B", de: "Gebäude B", zh: "B栋", tr: "B Binası"
    },
    "France": {
        en: "France", es: "Francia", pt: "França", it: "Francia", de: "Frankreich", zh: "法国", tr: "Fransa"
    },

    // Table horaires
    "Jour": {
        en: "Day", es: "Día", pt: "Dia", it: "Giorno", de: "Tag", zh: "日期", tr: "Gün"
    },
    "Matin": {
        en: "Morning", es: "Mañana", pt: "Manhã", it: "Mattina", de: "Morgen", zh: "上午", tr: "Sabah"
    },
    "Après-midi": {
        en: "Afternoon", es: "Tarde", pt: "Tarde", it: "Pomeriggio", de: "Nachmittag", zh: "下午", tr: "Öğleden Sonra"
    },

    // Connexion
    "Identifiant :": {
        en: "Login:", es: "Identificador:", pt: "Identificador:", it: "Identificativo:", de: "Kennung:", zh: "用户名：", tr: "Kullanıcı Adı:"
    },
    "Identifiant": {
        en: "Login", es: "Identificador", pt: "Identificador", it: "Identificativo", de: "Kennung", zh: "用户名", tr: "Kullanıcı Adı"
    },
    "Mot de passe :": {
        en: "Password:", es: "Contraseña:", pt: "Senha:", it: "Password:", de: "Passwort:", zh: "密码：", tr: "Şifre:"
    },
    "Mot de passe oublié": {
        en: "Forgot password", es: "Contraseña olvidada", pt: "Esqueceu a senha", it: "Password dimenticata", de: "Passwort vergessen", zh: "忘记密码", tr: "Şifremi unuttum"
    },
    "Le nom d'utilisateur est obligatoire.": {
        en: "The username is required.", es: "El nombre de usuario es obligatorio.", pt: "O nome de utilizador é obrigatório.", it: "Il nome utente è obbligatorio.", de: "Der Benutzername ist erforderlich.", zh: "用户名为必填项。", tr: "Kullanıcı adı zorunludur."
    },
    "Le mot de passe est obligatoire.": {
        en: "The password is required.", es: "La contraseña es obligatoria.", pt: "A senha é obrigatória.", it: "La password è obbligatoria.", de: "Das Passwort ist erforderlich.", zh: "密码为必填项。", tr: "Şifre zorunludur."
    },
    "Identifiant et/ou mot de passe incorrect(s)": {
        en: "Incorrect username and/or password", es: "Identificador y/o contraseña incorrectos", pt: "Identificador e/ou senha incorretos", it: "Identificativo e/o password non corretti", de: "Benutzername und/oder Passwort falsch", zh: "用户名和/或密码错误", tr: "Kullanıcı adı ve/veya şifre hatalı"
    },

    // Employés
    "Commerciaux à contacter": {
        en: "Salespeople to contact", es: "Comerciales a contactar", pt: "Comerciais a contactar", it: "Commerciali da contattare", de: "Ansprechpartner im Vertrieb", zh: "联系销售人员", tr: "İletişime geçilecek satış danışmanları"
    },
    "Aucune employé n'a été enregistré": {
        en: "No employee has been registered.", es: "No se ha registrado ningún empleado.", pt: "Nenhum funcionário foi registrado.", it: "Nessun dipendente è stato registrato.", de: "Kein Mitarbeiter wurde registriert.", zh: "暂无员工记录。", tr: "Henüz çalışan kaydedilmedi."
    },
    "Nom": {
        en: "Last Name", es: "Apellido", pt: "Apelido", it: "Cognome", de: "Nachname", zh: "姓", tr: "Soyadı"
    },
    "Prénom": {
        en: "First Name", es: "Nombre", pt: "Nome", it: "Nome", de: "Vorname", zh: "名", tr: "Adı"
    },
    "Téléphone": {
        en: "Phone", es: "Teléfono", pt: "Telefone", it: "Telefono", de: "Telefon", zh: "电话", tr: "Telefon"
    },
    "Fonction": {
        en: "Function", es: "Función", pt: "Função", it: "Funzione", de: "Funktion", zh: "职位", tr: "Görev"
    },
    "Modifier": {
        en: "Edit", es: "Modificar", pt: "Modificar", it: "Modificare", de: "Bearbeiten", zh: "修改", tr: "Düzenle"
    },
    "Supprimer": {
        en: "Delete", es: "Eliminar", pt: "Eliminar", it: "Eliminare", de: "Löschen", zh: "删除", tr: "Sil"
    },

    // Tour-opérateurs
    "Tour-opérateurs avec lesquels nous travaillons": {
        en: "Tour operators we work with", es: "Turoperadores con los que trabajamos", pt: "Operadores turísticos com os quais trabalhamos", it: "Tour operator con cui lavoriamo", de: "Reiseveranstalter, mit denen wir arbeiten", zh: "我们合作的旅游运营商", tr: "Çalıştığımız tur operatörleri"
    },
    "Aucun tour-opérateur n'a été enregistré": {
        en: "No tour operator has been registered.", es: "No se ha registrado ningún turoperador.", pt: "Nenhum operador turístico foi registrado.", it: "Nessun tour operator è stato registrato.", de: "Kein Reiseveranstalter wurde registriert.", zh: "暂无旅游运营商记录。", tr: "Henüz tur operatörü kaydedilmedi."
    },
    "Aucune tour-opérateur n'a été enregistré": {
        en: "No tour operator has been registered.", es: "No se ha registrado ningún turoperador.", pt: "Nenhum operador turístico foi registrado.", it: "Nessun tour operator è stato registrato.", de: "Kein Reiseveranstalter wurde registriert.", zh: "暂无旅游运营商记录。", tr: "Henüz tur operatörü kaydedilmedi."
    },

    // Demande d'information - Formulaire
    "Veuillez saisir votre nom.": {
        en: "Please enter your last name.", es: "Por favor, introduzca su apellido.", pt: "Por favor, introduza o seu apelido.", it: "Inserisca il suo cognome.", de: "Bitte geben Sie Ihren Nachnamen ein.", zh: "请输入您的姓。", tr: "Lütfen soyadınızı girin."
    },
    "Veuillez saisir votre prénom.": {
        en: "Please enter your first name.", es: "Por favor, introduzca su nombre.", pt: "Por favor, introduza o seu nome.", it: "Inserisca il suo nome.", de: "Bitte geben Sie Ihren Vornamen ein.", zh: "请输入您的名。", tr: "Lütfen adınızı girin."
    },
    "Veuillez saisir votre e-mail.": {
        en: "Please enter your email.", es: "Por favor, introduzca su correo electrónico.", pt: "Por favor, introduza o seu e-mail.", it: "Inserisca la sua e-mail.", de: "Bitte geben Sie Ihre E-Mail ein.", zh: "请输入您的电子邮件。", tr: "Lütfen e-posta adresinizi girin."
    },
    "E-mail": {
        en: "Email", es: "Correo electrónico", pt: "E-mail", it: "E-mail", de: "E-Mail", zh: "电子邮件", tr: "E-posta"
    },
    "Email": {
        en: "Email", es: "Correo electrónico", pt: "E-mail", it: "E-mail", de: "E-Mail", zh: "电子邮件", tr: "E-posta"
    },
    "Est-ce que vous nous avez déjà contacté ?": {
        en: "Have you already contacted us?", es: "¿Ya nos ha contactado?", pt: "Já nos contactou antes?", it: "Ci ha già contattato?", de: "Haben Sie uns bereits kontaktiert?", zh: "您之前联系过我们吗？", tr: "Daha önce bizimle iletişime geçtiniz mi?"
    },
    "non": {
        en: "no", es: "no", pt: "não", it: "no", de: "nein", zh: "否", tr: "hayır"
    },
    "oui": {
        en: "yes", es: "sí", pt: "sim", it: "sì", de: "ja", zh: "是", tr: "evet"
    },
    "Dans quel pays souhaitez-vous voyager ?": {
        en: "Which country do you want to travel to?", es: "¿A qué país desea viajar?", pt: "Para que país deseja viajar?", it: "In quale paese desidera viaggiare?", de: "In welches Land möchten Sie reisen?", zh: "您想去哪个国家旅行？", tr: "Hangi ülkeye seyahat etmek istiyorsunuz?"
    },
    "Chine": {
        en: "China", es: "China", pt: "China", it: "Cina", de: "China", zh: "中国", tr: "Çin"
    },
    "Allemagne": {
        en: "Germany", es: "Alemania", pt: "Alemanha", it: "Germania", de: "Deutschland", zh: "德国", tr: "Almanya"
    },
    "Danemark": {
        en: "Denmark", es: "Dinamarca", pt: "Dinamarca", it: "Danimarca", de: "Dänemark", zh: "丹麦", tr: "Danimarka"
    },
    "Espagne": {
        en: "Spain", es: "España", pt: "Espanha", it: "Spagna", de: "Spanien", zh: "西班牙", tr: "İspanya"
    },
    "Grèce": {
        en: "Greece", es: "Grecia", pt: "Grécia", it: "Grecia", de: "Griechenland", zh: "希腊", tr: "Yunanistan"
    },
    "Italie": {
        en: "Italy", es: "Italia", pt: "Itália", it: "Italia", de: "Italien", zh: "意大利", tr: "İtalya"
    },
    "Norvège": {
        en: "Norway", es: "Noruega", pt: "Noruega", it: "Norvegia", de: "Norwegen", zh: "挪威", tr: "Norveç"
    },
    "Suède": {
        en: "Sweden", es: "Suecia", pt: "Suécia", it: "Svezia", de: "Schweden", zh: "瑞典", tr: "İsveç"
    },
    "Veuillez décrire votre besoin ci-dessous": {
        en: "Please describe your need below", es: "Describa su necesidad a continuación", pt: "Descreva a sua necessidade abaixo", it: "Descriva la sua esigenza qui sotto", de: "Beschreiben Sie Ihren Bedarf unten", zh: "请在下方描述您的需求", tr: "Lütfen ihtiyacınızı aşağıda açıklayın"
    },
    "Envoyer": {
        en: "Send", es: "Enviar", pt: "Enviar", it: "Inviare", de: "Senden", zh: "发送", tr: "Gönder"
    },

    // Mentions légales
    "Mentions légales": {
        en: "Legal Notice", es: "Aviso legal", pt: "Aviso legal", it: "Note legali", de: "Impressum", zh: "法律声明", tr: "Yasal Bildirim"
    },
    "Editeur": {
        en: "Publisher", es: "Editor", pt: "Editor", it: "Editore", de: "Herausgeber", zh: "出版者", tr: "Yayıncı"
    },
    "Hebergement du site www.linkretz.com": {
        en: "Hosting www.linkretz.com", es: "Alojamiento del sitio www.linkretz.com", pt: "Alojamento do site www.linkretz.com", it: "Hosting del sito www.linkretz.com", de: "Hosting von www.linkretz.com", zh: "www.linkretz.com 网站托管", tr: "www.linkretz.com barındırma"
    },
    "Loi CNIL informatique et libertés": {
        en: "CNIL Data Protection and Freedoms Act", es: "Ley CNIL de informática y libertades", pt: "Lei CNIL de informática e liberdades", it: "Legge CNIL informatica e libertà", de: "CNIL-Datenschutzgesetz", zh: "CNIL信息与自由法", tr: "CNIL Bilişim ve Özgürlükler Yasası"
    },

    // Footer
    "Copyright 2025 Linkretz - Toute reproduction interdite -": {
        en: "Copyright 2025 Linkretz - No reproduction -",
        es: "Copyright 2025 Linkretz - Reproducción prohibida -",
        pt: "Copyright 2025 Linkretz - Reprodução proibida -",
        it: "Copyright 2025 Linkretz - Riproduzione vietata -",
        de: "Copyright 2025 Linkretz - Vervielfältigung verboten -",
        zh: "Copyright 2025 Linkretz - 禁止转载 -",
        tr: "Copyright 2025 Linkretz - Çoğaltma yasaktır -"
    },
    "Voir Mentions Légales": {
        en: "See Legal Notice", es: "Ver aviso legal", pt: "Ver aviso legal", it: "Vedi note legali", de: "Impressum anzeigen", zh: "查看法律声明", tr: "Yasal Bildirimi Gör"
    },

    // Panel admin / employé
    "Bienvenue dans l'espace administration": {
        en: "Welcome to the admin panel", es: "Bienvenido al panel de administración", pt: "Bem-vindo ao painel de administração", it: "Benvenuto nel pannello di amministrazione", de: "Willkommen im Administrationsbereich", zh: "欢迎进入管理面板", tr: "Yönetim paneline hoş geldiniz"
    },
    "Bienvenue dans l'espace dédié aux employés": {
        en: "Welcome to the employee panel", es: "Bienvenido al espacio de empleados", pt: "Bem-vindo ao espaço de funcionários", it: "Benvenuto nell'area dipendenti", de: "Willkommen im Mitarbeiterbereich", zh: "欢迎进入员工面板", tr: "Çalışan paneline hoş geldiniz"
    },
    "Vous êtes": {
        en: "You are", es: "Usted es", pt: "Você é", it: "Lei è", de: "Sie sind", zh: "您是", tr: "Göreviniz"
    },

    // Gestion employés
    "Gestion des employés.": {
        en: "Employee Management.", es: "Gestión de empleados.", pt: "Gestão de funcionários.", it: "Gestione dipendenti.", de: "Mitarbeiterverwaltung.", zh: "员工管理。", tr: "Çalışan Yönetimi."
    },
    "Personne connectée :": {
        en: "Connected person:", es: "Persona conectada:", pt: "Pessoa conectada:", it: "Persona connessa:", de: "Angemeldete Person:", zh: "当前登录用户：", tr: "Bağlı kişi:"
    },
    "Ajouter un employé": {
        en: "Add an employee", es: "Añadir un empleado", pt: "Adicionar um funcionário", it: "Aggiungere un dipendente", de: "Mitarbeiter hinzufügen", zh: "添加员工", tr: "Çalışan ekle"
    },
    "Ajout d'un employé": {
        en: "Add an Employee", es: "Añadir un empleado", pt: "Adicionar um funcionário", it: "Aggiunta di un dipendente", de: "Mitarbeiter hinzufügen", zh: "添加员工", tr: "Çalışan Ekleme"
    },
    "Modification d'un employé": {
        en: "Edit an Employee", es: "Modificar un empleado", pt: "Modificar um funcionário", it: "Modifica di un dipendente", de: "Mitarbeiter bearbeiten", zh: "修改员工", tr: "Çalışan Düzenleme"
    },
    "Modifier l'employé": {
        en: "Edit Employee", es: "Modificar empleado", pt: "Modificar funcionário", it: "Modificare dipendente", de: "Mitarbeiter bearbeiten", zh: "修改员工", tr: "Çalışanı Düzenle"
    },
    "Profil": {
        en: "Profile", es: "Perfil", pt: "Perfil", it: "Profilo", de: "Profil", zh: "个人资料", tr: "Profil"
    },
    "Employé (non-administrateur)": {
        en: "Employee (non-administrator)", es: "Empleado (no administrador)", pt: "Funcionário (não administrador)", it: "Dipendente (non amministratore)", de: "Mitarbeiter (kein Administrator)", zh: "员工（非管理员）", tr: "Çalışan (yönetici değil)"
    },
    "Administrateur": {
        en: "Administrator", es: "Administrador", pt: "Administrador", it: "Amministratore", de: "Administrator", zh: "管理员", tr: "Yönetici"
    },
    "E-mail de l'employé.": {
        en: "Employee email.", es: "Correo del empleado.", pt: "E-mail do funcionário.", it: "E-mail del dipendente.", de: "E-Mail des Mitarbeiters.", zh: "员工电子邮件。", tr: "Çalışanın e-postası."
    },

    // Gestion tour-opérateurs
    "Gestion des tour-opérateurs.": {
        en: "Tour Operator Management.", es: "Gestión de turoperadores.", pt: "Gestão de operadores turísticos.", it: "Gestione tour operator.", de: "Reiseveranstalterverwaltung.", zh: "旅游运营商管理。", tr: "Tur Operatörü Yönetimi."
    },
    "Ajouter un tour-opérateur": {
        en: "Add a tour operator", es: "Añadir un turoperador", pt: "Adicionar um operador turístico", it: "Aggiungere un tour operator", de: "Reiseveranstalter hinzufügen", zh: "添加旅游运营商", tr: "Tur operatörü ekle"
    },
    "Ajout d'un tour-opérateur": {
        en: "Add a Tour Operator", es: "Añadir un turoperador", pt: "Adicionar um operador turístico", it: "Aggiunta di un tour operator", de: "Reiseveranstalter hinzufügen", zh: "添加旅游运营商", tr: "Tur Operatörü Ekleme"
    },
    "Modification d'un tour-opérateur": {
        en: "Edit a Tour Operator", es: "Modificar un turoperador", pt: "Modificar um operador turístico", it: "Modifica di un tour operator", de: "Reiseveranstalter bearbeiten", zh: "修改旅游运营商", tr: "Tur Operatörü Düzenleme"
    },
    "Modifier le tour-opérateur": {
        en: "Edit Tour Operator", es: "Modificar turoperador", pt: "Modificar operador turístico", it: "Modificare tour operator", de: "Reiseveranstalter bearbeiten", zh: "修改旅游运营商", tr: "Tur Operatörünü Düzenle"
    },
    "Numéro Immatriculation": {
        en: "Registration Number", es: "Número de registro", pt: "Número de registo", it: "Numero di registrazione", de: "Registrierungsnummer", zh: "注册号", tr: "Kayıt Numarası"
    },
    "Nom Français": {
        en: "French Name", es: "Nombre en francés", pt: "Nome em francês", it: "Nome in francese", de: "Französischer Name", zh: "法语名称", tr: "Fransızca Adı"
    },
    "Nom Anglais": {
        en: "English Name", es: "Nombre en inglés", pt: "Nome em inglês", it: "Nome in inglese", de: "Englischer Name", zh: "英语名称", tr: "İngilizce Adı"
    },
    "Spécialité": {
        en: "Specialty", es: "Especialidad", pt: "Especialidade", it: "Specialità", de: "Spezialität", zh: "专业", tr: "Uzmanlık"
    },
    "Immatriculation": {
        en: "Registration", es: "Registro", pt: "Registo", it: "Registrazione", de: "Registrierung", zh: "注册", tr: "Kayıt"
    },

    // Formulaires - Placeholders et labels
    "Saisissez le nom de l'employé.": {
        en: "Enter employee last name.", es: "Introduzca el apellido del empleado.", pt: "Introduza o apelido do funcionário.", it: "Inserisca il cognome del dipendente.", de: "Geben Sie den Nachnamen des Mitarbeiters ein.", zh: "请输入员工姓氏。", tr: "Çalışanın soyadını girin."
    },
    "Saisissez le prénom de l'employé.": {
        en: "Enter employee first name.", es: "Introduzca el nombre del empleado.", pt: "Introduza o nome do funcionário.", it: "Inserisca il nome del dipendente.", de: "Geben Sie den Vornamen des Mitarbeiters ein.", zh: "请输入员工名字。", tr: "Çalışanın adını girin."
    },
    "Saisissez le numéro de téléphone de l'employé. (Format Internationnal sans espaces)": {
        en: "Enter employee phone number. (International format without spaces)",
        es: "Introduzca el teléfono del empleado. (Formato internacional sin espacios)",
        pt: "Introduza o telefone do funcionário. (Formato internacional sem espaços)",
        it: "Inserisca il numero di telefono del dipendente. (Formato internazionale senza spazi)",
        de: "Geben Sie die Telefonnummer des Mitarbeiters ein. (Internationales Format ohne Leerzeichen)",
        zh: "请输入员工电话号码。（国际格式，不含空格）",
        tr: "Çalışanın telefon numarasını girin. (Boşluksuz uluslararası format)"
    },
    "Veuillez sélectionner la fonction de l'employé": {
        en: "Please select the employee's function", es: "Seleccione la función del empleado", pt: "Selecione a função do funcionário", it: "Selezionare la funzione del dipendente", de: "Bitte wählen Sie die Funktion des Mitarbeiters", zh: "请选择员工职位", tr: "Lütfen çalışanın görevini seçin"
    },
    "Saisissez l'immatriculation du tour-opérateur.": {
        en: "Enter the tour operator's registration number.", es: "Introduzca el número de registro del turoperador.", pt: "Introduza o número de registo do operador turístico.", it: "Inserisca il numero di registrazione del tour operator.", de: "Geben Sie die Registrierungsnummer des Reiseveranstalters ein.", zh: "请输入旅游运营商的注册号。", tr: "Tur operatörünün kayıt numarasını girin."
    },
    "Saisissez le nom français du tour-opérateur.": {
        en: "Enter the tour operator's French name.", es: "Introduzca el nombre en francés del turoperador.", pt: "Introduza o nome em francês do operador turístico.", it: "Inserisca il nome in francese del tour operator.", de: "Geben Sie den französischen Namen des Reiseveranstalters ein.", zh: "请输入旅游运营商的法语名称。", tr: "Tur operatörünün Fransızca adını girin."
    },
    "Saisissez le nom anglais du tour-opérateur.": {
        en: "Enter the tour operator's English name.", es: "Introduzca el nombre en inglés del turoperador.", pt: "Introduza o nome em inglês do operador turístico.", it: "Inserisca il nome in inglese del tour operator.", de: "Geben Sie den englischen Namen des Reiseveranstalters ein.", zh: "请输入旅游运营商的英语名称。", tr: "Tur operatörünün İngilizce adını girin."
    },
    "Saisissez la description française du tour-opérateur": {
        en: "Enter the tour operator's French description.", es: "Introduzca la descripción en francés del turoperador.", pt: "Introduza a descrição em francês do operador turístico.", it: "Inserisca la descrizione in francese del tour operator.", de: "Geben Sie die französische Beschreibung des Reiseveranstalters ein.", zh: "请输入旅游运营商的法语描述。", tr: "Tur operatörünün Fransızca açıklamasını girin."
    },
    "Saisissez la description anglaise du tour-opérateur": {
        en: "Enter the tour operator's English description.", es: "Introduzca la descripción en inglés del turoperador.", pt: "Introduza a descrição em inglês do operador turístico.", it: "Inserisca la descrizione in inglese del tour operator.", de: "Geben Sie die englische Beschreibung des Reiseveranstalters ein.", zh: "请输入旅游运营商的英语描述。", tr: "Tur operatörünün İngilizce açıklamasını girin."
    },
    "Veuillez sélectionner une spécialité": {
        en: "Please select a specialty", es: "Seleccione una especialidad", pt: "Selecione uma especialidade", it: "Selezionare una specialità", de: "Bitte wählen Sie eine Spezialität", zh: "请选择一个专业", tr: "Lütfen bir uzmanlık seçin"
    },
    "Enregistrer": {
        en: "Save", es: "Guardar", pt: "Guardar", it: "Salvare", de: "Speichern", zh: "保存", tr: "Kaydet"
    },
    "Fonction de l'employé": {
        en: "Employee's function", es: "Función del empleado", pt: "Função do funcionário", it: "Funzione del dipendente", de: "Funktion des Mitarbeiters", zh: "员工职位", tr: "Çalışanın görevi"
    },
    "Description Française": {
        en: "French Description", es: "Descripción en francés", pt: "Descrição em francês", it: "Descrizione in francese", de: "Französische Beschreibung", zh: "法语描述", tr: "Fransızca Açıklama"
    },
    "Description Anglaise": {
        en: "English Description", es: "Descripción en inglés", pt: "Descrição em inglês", it: "Descrizione in inglese", de: "Englische Beschreibung", zh: "英语描述", tr: "İngilizce Açıklama"
    },
    "Saisissez votre identifiant.": {
        en: "Enter your username.", es: "Introduzca su identificador.", pt: "Introduza o seu identificador.", it: "Inserisca il suo identificativo.", de: "Geben Sie Ihre Kennung ein.", zh: "请输入您的用户名。", tr: "Kullanıcı adınızı girin."
    },
    "Saisissez votre email.": {
        en: "Enter your email.", es: "Introduzca su correo electrónico.", pt: "Introduza o seu e-mail.", it: "Inserisca la sua e-mail.", de: "Geben Sie Ihre E-Mail ein.", zh: "请输入您的电子邮件。", tr: "E-posta adresinizi girin."
    },
    "Entrez votre nouveau mot de passe": {
        en: "Enter your new password", es: "Introduzca su nueva contraseña", pt: "Introduza a sua nova senha", it: "Inserisca la nuova password", de: "Geben Sie Ihr neues Passwort ein", zh: "请输入您的新密码", tr: "Yeni şifrenizi girin"
    },
    "Confirmer le mot de passe": {
        en: "Confirm password", es: "Confirmar contraseña", pt: "Confirmar senha", it: "Confermare la password", de: "Passwort bestätigen", zh: "确认密码", tr: "Şifreyi onayla"
    },
    "Confirmez votre nouveau mot de passe": {
        en: "Confirm your new password", es: "Confirme su nueva contraseña", pt: "Confirme a sua nova senha", it: "Confermi la nuova password", de: "Bestätigen Sie Ihr neues Passwort", zh: "确认您的新密码", tr: "Yeni şifrenizi onaylayın"
    },

    // Mot de passe
    "Modification du mot de passse": {
        en: "Change Password", es: "Cambiar contraseña", pt: "Alterar senha", it: "Modifica password", de: "Passwort ändern", zh: "修改密码", tr: "Şifre Değiştir"
    },
    "Mot de passe actuel": {
        en: "Current Password", es: "Contraseña actual", pt: "Senha atual", it: "Password attuale", de: "Aktuelles Passwort", zh: "当前密码", tr: "Mevcut Şifre"
    },
    "Nouveau mot de passe": {
        en: "New Password", es: "Nueva contraseña", pt: "Nova senha", it: "Nuova password", de: "Neues Passwort", zh: "新密码", tr: "Yeni Şifre"
    },
    "Saisissez votre mot de passe actuel.": {
        en: "Enter your current password.", es: "Introduzca su contraseña actual.", pt: "Introduza a sua senha atual.", it: "Inserisca la password attuale.", de: "Geben Sie Ihr aktuelles Passwort ein.", zh: "请输入您的当前密码。", tr: "Mevcut şifrenizi girin."
    },
    "Saisissez le nouveau mot de passe. (Minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spéciale)": {
        en: "Enter the new password. (Min 8 characters, 1 uppercase, 1 lowercase, 1 digit and 1 special character)",
        es: "Introduzca la nueva contraseña. (Mínimo 8 caracteres, 1 mayúscula, 1 minúscula, 1 dígito y 1 carácter especial)",
        pt: "Introduza a nova senha. (Mínimo 8 caracteres, 1 maiúscula, 1 minúscula, 1 dígito e 1 caractere especial)",
        it: "Inserisca la nuova password. (Minimo 8 caratteri, 1 maiuscola, 1 minuscola, 1 cifra e 1 carattere speciale)",
        de: "Geben Sie das neue Passwort ein. (Min. 8 Zeichen, 1 Großbuchstabe, 1 Kleinbuchstabe, 1 Ziffer und 1 Sonderzeichen)",
        zh: "请输入新密码。（至少8个字符，1个大写字母，1个小写字母，1个数字和1个特殊字符）",
        tr: "Yeni şifrenizi girin. (En az 8 karakter, 1 büyük harf, 1 küçük harf, 1 rakam ve 1 özel karakter)"
    },
    "Confirmer nouveau mot de passe": {
        en: "Confirm New Password", es: "Confirmar nueva contraseña", pt: "Confirmar nova senha", it: "Confermare nuova password", de: "Neues Passwort bestätigen", zh: "确认新密码", tr: "Yeni Şifreyi Onayla"
    },
    "Confirmer le nouveau mot de passe": {
        en: "Confirm your new password", es: "Confirme su nueva contraseña", pt: "Confirme a sua nova senha", it: "Confermare la nuova password", de: "Bestätigen Sie Ihr neues Passwort", zh: "确认您的新密码", tr: "Yeni şifrenizi onaylayın"
    },
    "Réinitialisation du mot de passe": {
        en: "Reset Password", es: "Restablecer contraseña", pt: "Redefinir senha", it: "Reimpostazione password", de: "Passwort zurücksetzen", zh: "重置密码", tr: "Şifre Sıfırlama"
    },
    "Réinitialiser le mot de passe": {
        en: "Reset Password", es: "Restablecer contraseña", pt: "Redefinir senha", it: "Reimpostare la password", de: "Passwort zurücksetzen", zh: "重置密码", tr: "Şifreyi Sıfırla"
    },
    "Envoyer le lien de réinitialisation": {
        en: "Send reset link", es: "Enviar enlace de restablecimiento", pt: "Enviar link de redefinição", it: "Inviare link di reimpostazione", de: "Link zum Zurücksetzen senden", zh: "发送重置链接", tr: "Sıfırlama bağlantısı gönder"
    },

    // Demande info employé
    "Liste des demandes d'information": {
        en: "List of Information Requests", es: "Lista de solicitudes de información", pt: "Lista de pedidos de informação", it: "Lista delle richieste di informazioni", de: "Liste der Informationsanfragen", zh: "信息请求列表", tr: "Bilgi Talepleri Listesi"
    },
    "Nom et Prénom": {
        en: "Full Name", es: "Nombre completo", pt: "Nome completo", it: "Nome e cognome", de: "Vollständiger Name", zh: "姓名", tr: "Ad Soyad"
    },
    "Mail": {
        en: "Email", es: "Correo", pt: "E-mail", it: "E-mail", de: "E-Mail", zh: "邮箱", tr: "E-posta"
    },
    "A déjà contacté l'agence": {
        en: "Already contacted the agency", es: "Ya ha contactado con la agencia", pt: "Já contactou a agência", it: "Ha già contattato l'agenzia", de: "Hat die Agentur bereits kontaktiert", zh: "已联系过该机构", tr: "Ajansla daha önce iletişime geçti"
    },
    "Pays choisi": {
        en: "Chosen Country", es: "País elegido", pt: "País escolhido", it: "Paese scelto", de: "Gewähltes Land", zh: "选择的国家", tr: "Seçilen Ülke"
    },
    "Besoin": {
        en: "Need", es: "Necesidad", pt: "Necessidade", it: "Esigenza", de: "Bedarf", zh: "需求", tr: "İhtiyaç"
    },
    "Aucune demande d'information n'a été enregistré": {
        en: "No information request has been registered.", es: "No se ha registrado ninguna solicitud de información.", pt: "Nenhum pedido de informação foi registrado.", it: "Nessuna richiesta di informazioni è stata registrata.", de: "Keine Informationsanfrage wurde registriert.", zh: "暂无信息请求记录。", tr: "Henüz bilgi talebi kaydedilmedi."
    },

    // Données BD - Jours
    "Lundi": {
        en: "Monday", es: "Lunes", pt: "Segunda-feira", it: "Lunedì", de: "Montag", zh: "星期一", tr: "Pazartesi"
    },
    "Mardi": {
        en: "Tuesday", es: "Martes", pt: "Terça-feira", it: "Martedì", de: "Dienstag", zh: "星期二", tr: "Salı"
    },
    "Mercredi": {
        en: "Wednesday", es: "Miércoles", pt: "Quarta-feira", it: "Mercoledì", de: "Mittwoch", zh: "星期三", tr: "Çarşamba"
    },
    "Jeudi": {
        en: "Thursday", es: "Jueves", pt: "Quinta-feira", it: "Giovedì", de: "Donnerstag", zh: "星期四", tr: "Perşembe"
    },
    "Vendredi": {
        en: "Friday", es: "Viernes", pt: "Sexta-feira", it: "Venerdì", de: "Freitag", zh: "星期五", tr: "Cuma"
    },
    "Samedi": {
        en: "Saturday", es: "Sábado", pt: "Sábado", it: "Sabato", de: "Samstag", zh: "星期六", tr: "Cumartesi"
    },

    // Données BD - Fonctions
    "Responsable de l'agence": {
        en: "Head of the agency", es: "Responsable de la agencia", pt: "Responsável da agência", it: "Responsabile dell'agenzia", de: "Agenturleiter", zh: "机构负责人", tr: "Ajans sorumlusu"
    },
    "Comptable": {
        en: "Accountant", es: "Contable", pt: "Contabilista", it: "Contabile", de: "Buchhalter", zh: "会计", tr: "Muhasebeci"
    },
    "Commercial": {
        en: "Commercial", es: "Comercial", pt: "Comercial", it: "Commerciale", de: "Vertrieb", zh: "销售", tr: "Satış Danışmanı"
    },
    "Administrateur Informatique": {
        en: "IT admin", es: "Administrador informático", pt: "Administrador informático", it: "Amministratore informatico", de: "IT-Administrator", zh: "IT管理员", tr: "Bilgi İşlem Yöneticisi"
    },

    // Données BD - Spécialités
    "Séjours scandinaves": {
        en: "Scandinavian Stays", es: "Estancias escandinavas", pt: "Estadias escandinavas", it: "Soggiorni scandinavi", de: "Skandinavische Aufenthalte", zh: "斯堪的纳维亚之旅", tr: "İskandinav Tatilleri"
    },
    "Séjours en Asie": {
        en: "Asian Stays", es: "Estancias en Asia", pt: "Estadias na Ásia", it: "Soggiorni in Asia", de: "Aufenthalte in Asien", zh: "亚洲之旅", tr: "Asya Tatilleri"
    },
    "Séjours dans le bassin méditerranéen": {
        en: "Mediterranean Basin Stays", es: "Estancias en el Mediterráneo", pt: "Estadias no Mediterrâneo", it: "Soggiorni nel Mediterraneo", de: "Aufenthalte im Mittelmeerraum", zh: "地中海之旅", tr: "Akdeniz Havzası Tatilleri"
    },
    "Séjours en Italie": {
        en: "Italian Stays", es: "Estancias en Italia", pt: "Estadias na Itália", it: "Soggiorni in Italia", de: "Aufenthalte in Italien", zh: "意大利之旅", tr: "İtalya Tatilleri"
    },

    // Données BD - Oui/Non
    "Oui": {
        en: "Yes", es: "Sí", pt: "Sim", it: "Sì", de: "Ja", zh: "是", tr: "Evet"
    },
    "Non": {
        en: "No", es: "No", pt: "Não", it: "No", de: "Nein", zh: "否", tr: "Hayır"
    },

    // Données BD - Horaires
    "10h30 à 12h30": {
        en: "10:30 AM to 12:30 PM", es: "10:30 a 12:30", pt: "10h30 às 12h30", it: "10:30 - 12:30", de: "10:30 bis 12:30", zh: "10:30 至 12:30", tr: "10:30 - 12:30"
    },
    "8h30 à 12h30": {
        en: "08:30 AM to 12:30 PM", es: "8:30 a 12:30", pt: "8h30 às 12h30", it: "8:30 - 12:30", de: "8:30 bis 12:30", zh: "8:30 至 12:30", tr: "08:30 - 12:30"
    },
    "9h00 à 12h30": {
        en: "09:00 AM to 12:30 PM", es: "9:00 a 12:30", pt: "9h00 às 12h30", it: "9:00 - 12:30", de: "9:00 bis 12:30", zh: "9:00 至 12:30", tr: "09:00 - 12:30"
    },
    "14h00 à 18h30": {
        en: "14:00 PM to 18:30 PM", es: "14:00 a 18:30", pt: "14h00 às 18h30", it: "14:00 - 18:30", de: "14:00 bis 18:30", zh: "14:00 至 18:30", tr: "14:00 - 18:30"
    },
    "13h30 à 20h00": {
        en: "13:30 PM to 20:00 PM", es: "13:30 a 20:00", pt: "13h30 às 20h00", it: "13:30 - 20:00", de: "13:30 bis 20:00", zh: "13:30 至 20:00", tr: "13:30 - 20:00"
    },
    "13h30 à 19h00": {
        en: "13:30 PM to 19:00 PM", es: "13:30 a 19:00", pt: "13h30 às 19h00", it: "13:30 - 19:00", de: "13:30 bis 19:00", zh: "13:30 至 19:00", tr: "13:30 - 19:00"
    },

    // Validations JS - Formulaire demande
    "Le nom est obligatoire.": {
        en: "Last name is required.", es: "El apellido es obligatorio.", pt: "O apelido é obrigatório.", it: "Il cognome è obbligatorio.", de: "Der Nachname ist erforderlich.", zh: "姓为必填项。", tr: "Soyadı zorunludur."
    },
    "Le prénom est obligatoire.": {
        en: "First name is required.", es: "El nombre es obligatorio.", pt: "O nome é obrigatório.", it: "Il nome è obbligatorio.", de: "Der Vorname ist erforderlich.", zh: "名为必填项。", tr: "Ad zorunludur."
    },
    "L'e-mail est obligatoire.": {
        en: "Email is required.", es: "El correo electrónico es obligatorio.", pt: "O e-mail é obrigatório.", it: "L'e-mail è obbligatoria.", de: "Die E-Mail ist erforderlich.", zh: "电子邮件为必填项。", tr: "E-posta zorunludur."
    },
    "Merci de saisir un e-mail valide.": {
        en: "Please enter a valid email.", es: "Por favor, introduzca un correo electrónico válido.", pt: "Por favor, introduza um e-mail válido.", it: "Inserisca un'e-mail valida.", de: "Bitte geben Sie eine gültige E-Mail ein.", zh: "请输入有效的电子邮件。", tr: "Lütfen geçerli bir e-posta girin."
    },
    "Le téléphone est obligatoire.": {
        en: "Phone number is required.", es: "El teléfono es obligatorio.", pt: "O telefone é obrigatório.", it: "Il telefono è obbligatorio.", de: "Die Telefonnummer ist erforderlich.", zh: "电话为必填项。", tr: "Telefon numarası zorunludur."
    },
    "Le numéro de téléphone doit être au format international sans espace.": {
        en: "Phone number must be in international format without spaces.", es: "El número de teléfono debe estar en formato internacional sin espacios.", pt: "O número de telefone deve estar no formato internacional sem espaços.", it: "Il numero di telefono deve essere in formato internazionale senza spazi.", de: "Die Telefonnummer muss im internationalen Format ohne Leerzeichen sein.", zh: "电话号码必须为国际格式，不含空格。", tr: "Telefon numarası boşluksuz uluslararası formatta olmalıdır."
    },
    "Il est nécessaire de décire votre besoin.": {
        en: "You must describe your need.", es: "Es necesario describir su necesidad.", pt: "É necessário descrever a sua necessidade.", it: "È necessario descrivere la sua esigenza.", de: "Sie müssen Ihren Bedarf beschreiben.", zh: "请描述您的需求。", tr: "İhtiyacınızı açıklamanız gerekmektedir."
    },

    // Validations JS - Formulaire employé
    "La sélection d'une fonction est obligatoire.": {
        en: "Selecting a function is required.", es: "La selección de una función es obligatoria.", pt: "A seleção de uma função é obrigatória.", it: "La selezione di una funzione è obbligatoria.", de: "Die Auswahl einer Funktion ist erforderlich.", zh: "必须选择一个职位。", tr: "Görev seçimi zorunludur."
    },
    "La selection d'une fonction est obligatoire.": {
        en: "Selecting a function is required.", es: "La selección de una función es obligatoria.", pt: "A seleção de uma função é obrigatória.", it: "La selezione di una funzione è obbligatoria.", de: "Die Auswahl einer Funktion ist erforderlich.", zh: "必须选择一个职位。", tr: "Görev seçimi zorunludur."
    },
    "La sélection d'un profil est obligatoire.": {
        en: "Selecting a profile is required.", es: "La selección de un perfil es obligatoria.", pt: "A seleção de um perfil é obrigatória.", it: "La selezione di un profilo è obbligatoria.", de: "Die Auswahl eines Profils ist erforderlich.", zh: "必须选择一个配置文件。", tr: "Profil seçimi zorunludur."
    },
    "Le selection du profil est obligatoire.": {
        en: "Selecting a profile is required.", es: "La selección de un perfil es obligatoria.", pt: "A seleção de um perfil é obrigatória.", it: "La selezione di un profilo è obbligatoria.", de: "Die Auswahl eines Profils ist erforderlich.", zh: "必须选择一个配置文件。", tr: "Profil seçimi zorunludur."
    },

    // Validations JS - Formulaire mot de passe
    "Le mot de passe doit contenir au minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spéciale.": {
        en: "Password must contain at least 8 characters, 1 uppercase, 1 lowercase, 1 digit and 1 special character.", es: "La contraseña debe contener al menos 8 caracteres, 1 mayúscula, 1 minúscula, 1 dígito y 1 carácter especial.", pt: "A senha deve conter no mínimo 8 caracteres, 1 maiúscula, 1 minúscula, 1 dígito e 1 caractere especial.", it: "La password deve contenere almeno 8 caratteri, 1 maiuscola, 1 minuscola, 1 cifra e 1 carattere speciale.", de: "Das Passwort muss mindestens 8 Zeichen, 1 Großbuchstaben, 1 Kleinbuchstaben, 1 Ziffer und 1 Sonderzeichen enthalten.", zh: "密码须包含至少8个字符、1个大写字母、1个小写字母、1个数字和1个特殊字符。", tr: "Şifre en az 8 karakter, 1 büyük harf, 1 küçük harf, 1 rakam ve 1 özel karakter içermelidir."
    },
    "Les mot de passe ne sont pas identiques.": {
        en: "Passwords do not match.", es: "Las contraseñas no coinciden.", pt: "As senhas não coincidem.", it: "Le password non corrispondono.", de: "Die Passwörter stimmen nicht überein.", zh: "密码不一致。", tr: "Şifreler eşleşmiyor."
    },

    // Validations JS - Formulaire tour-opérateur
    "L'immatriculation est obligatoire.": {
        en: "Registration number is required.", es: "El número de registro es obligatorio.", pt: "O número de registo é obrigatório.", it: "Il numero di registrazione è obbligatorio.", de: "Die Registrierungsnummer ist erforderlich.", zh: "注册号为必填项。", tr: "Kayıt numarası zorunludur."
    },
    "Le nom français du tour-opérateur est obligatoire.": {
        en: "The tour operator's French name is required.", es: "El nombre en francés del turoperador es obligatorio.", pt: "O nome em francês do operador turístico é obrigatório.", it: "Il nome in francese del tour operator è obbligatorio.", de: "Der französische Name des Reiseveranstalters ist erforderlich.", zh: "旅游运营商的法语名称为必填项。", tr: "Tur operatörünün Fransızca adı zorunludur."
    },
    "Le nom anglais du tour-opérateur est obligatoire.": {
        en: "The tour operator's English name is required.", es: "El nombre en inglés del turoperador es obligatorio.", pt: "O nome em inglês do operador turístico é obrigatório.", it: "Il nome in inglese del tour operator è obbligatorio.", de: "Der englische Name des Reiseveranstalters ist erforderlich.", zh: "旅游运营商的英语名称为必填项。", tr: "Tur operatörünün İngilizce adı zorunludur."
    },
    "Le nom du tour-opérateur est obligatoire.": {
        en: "The tour operator's name is required.", es: "El nombre del turoperador es obligatorio.", pt: "O nome do operador turístico é obrigatório.", it: "Il nome del tour operator è obbligatorio.", de: "Der Name des Reiseveranstalters ist erforderlich.", zh: "旅游运营商名称为必填项。", tr: "Tur operatörünün adı zorunludur."
    },
    "La description française du tour-opérateur est obligatoire.": {
        en: "The tour operator's French description is required.", es: "La descripción en francés del turoperador es obligatoria.", pt: "A descrição em francês do operador turístico é obrigatória.", it: "La descrizione in francese del tour operator è obbligatoria.", de: "Die französische Beschreibung des Reiseveranstalters ist erforderlich.", zh: "旅游运营商的法语描述为必填项。", tr: "Tur operatörünün Fransızca açıklaması zorunludur."
    },
    "La description anglaise du tour-opérateur est obligatoire.": {
        en: "The tour operator's English description is required.", es: "La descripción en inglés del turoperador es obligatoria.", pt: "A descrição em inglês do operador turístico é obrigatória.", it: "La descrizione in inglese del tour operator è obbligatoria.", de: "Die englische Beschreibung des Reiseveranstalters ist erforderlich.", zh: "旅游运营商的英语描述为必填项。", tr: "Tur operatörünün İngilizce açıklaması zorunludur."
    },
    "La selection d'une spécialité est obligatoire.": {
        en: "Selecting a specialty is required.", es: "La selección de una especialidad es obligatoria.", pt: "A seleção de uma especialidade é obrigatória.", it: "La selezione di una specialità è obbligatoria.", de: "Die Auswahl einer Spezialität ist erforderlich.", zh: "必须选择一个专业。", tr: "Uzmanlık seçimi zorunludur."
    },

    // Confirmations de suppression
    "Êtes-vous sûr de vouloir supprimer cet employé ?": {
        en: "Are you sure you want to delete this employee?", es: "¿Está seguro de que desea eliminar este empleado?", pt: "Tem certeza de que deseja eliminar este funcionário?", it: "È sicuro di voler eliminare questo dipendente?", de: "Sind Sie sicher, dass Sie diesen Mitarbeiter löschen möchten?", zh: "您确定要删除此员工吗？", tr: "Bu çalışanı silmek istediğinizden emin misiniz?"
    },
    "Êtes-vous sûr de vouloir supprimer ce tour-opérateur ?": {
        en: "Are you sure you want to delete this tour operator?", es: "¿Está seguro de que desea eliminar este turoperador?", pt: "Tem certeza de que deseja eliminar este operador turístico?", it: "È sicuro di voler eliminare questo tour operator?", de: "Sind Sie sicher, dass Sie diesen Reiseveranstalter löschen möchten?", zh: "您确定要删除此旅游运营商吗？", tr: "Bu tur operatörünü silmek istediğinizden emin misiniz?"
    },
    "Êtes-vous sûr de vouloir supprimer cette promotion ?": {
        en: "Are you sure you want to delete this promotion?", es: "¿Está seguro de que desea eliminar esta promoción?", pt: "Tem certeza de que deseja eliminar esta promoção?", it: "È sicuro di voler eliminare questa promozione?", de: "Sind Sie sicher, dass Sie diese Aktion löschen möchten?", zh: "您确定要删除此促销活动吗？", tr: "Bu promosyonu silmek istediğinizden emin misiniz?"
    },

    // Messages PHP serveur
    "La demande a bien été enregistrée.": {
        en: "The request has been registered.", es: "La solicitud ha sido registrada.", pt: "O pedido foi registrado.", it: "La richiesta è stata registrata.", de: "Die Anfrage wurde registriert.", zh: "请求已登记。", tr: "Talep kaydedildi."
    },
    "La demande n'a pas été enregistrée.": {
        en: "The request was not registered.", es: "La solicitud no ha sido registrada.", pt: "O pedido não foi registrado.", it: "La richiesta non è stata registrata.", de: "Die Anfrage wurde nicht registriert.", zh: "请求未登记。", tr: "Talep kaydedilemedi."
    },
    "Les caractéristiques de l'employé ont bien été enregistrées.": {
        en: "Employee details have been saved.", es: "Los datos del empleado han sido guardados.", pt: "Os dados do funcionário foram guardados.", it: "I dati del dipendente sono stati salvati.", de: "Die Mitarbeiterdaten wurden gespeichert.", zh: "员工信息已保存。", tr: "Çalışan bilgileri kaydedildi."
    },
    "Les caractéristiques de l'employé n'ont pas été enregistrées : ": {
        en: "Employee details were not saved: ", es: "Los datos del empleado no han sido guardados: ", pt: "Os dados do funcionário não foram guardados: ", it: "I dati del dipendente non sono stati salvati: ", de: "Die Mitarbeiterdaten wurden nicht gespeichert: ", zh: "员工信息未保存：", tr: "Çalışan bilgileri kaydedilemedi: "
    },
    "Les caractéristiques de l'employé ont bien été modifiées.": {
        en: "Employee details have been updated.", es: "Los datos del empleado han sido modificados.", pt: "Os dados do funcionário foram modificados.", it: "I dati del dipendente sono stati modificati.", de: "Die Mitarbeiterdaten wurden aktualisiert.", zh: "员工信息已更新。", tr: "Çalışan bilgileri güncellendi."
    },
    "Les caractéristiques du tour-opérateur ont bien été enregistrées": {
        en: "Tour operator details have been saved.", es: "Los datos del turoperador han sido guardados.", pt: "Os dados do operador turístico foram guardados.", it: "I dati del tour operator sono stati salvati.", de: "Die Reiseveranstalterdaten wurden gespeichert.", zh: "旅游运营商信息已保存。", tr: "Tur operatörü bilgileri kaydedildi."
    },
    "Les caractéristiques du tour-opérateur n'ont pas été enregistrées : ": {
        en: "Tour operator details were not saved: ", es: "Los datos del turoperador no han sido guardados: ", pt: "Os dados do operador turístico não foram guardados: ", it: "I dati del tour operator non sono stati salvati: ", de: "Die Reiseveranstalterdaten wurden nicht gespeichert: ", zh: "旅游运营商信息未保存：", tr: "Tur operatörü bilgileri kaydedilemedi: "
    },
    "Les caractéristiques du tour-opérateur ont bien été modifiées": {
        en: "Tour operator details have been updated.", es: "Los datos del turoperador han sido modificados.", pt: "Os dados do operador turístico foram modificados.", it: "I dati del tour operator sono stati modificati.", de: "Die Reiseveranstalterdaten wurden aktualisiert.", zh: "旅游运营商信息已更新。", tr: "Tur operatörü bilgileri güncellendi."
    },
    "La suppression a été réalisée.": {
        en: "Deletion successful.", es: "Eliminación realizada.", pt: "Eliminação realizada.", it: "Eliminazione effettuata.", de: "Löschung durchgeführt.", zh: "删除成功。", tr: "Silme işlemi gerçekleştirildi."
    },
    "Les caractéristiques de l'employé n'ont pas été supprimées.": {
        en: "Employee details were not deleted.", es: "Los datos del empleado no han sido eliminados.", pt: "Os dados do funcionário não foram eliminados.", it: "I dati del dipendente non sono stati eliminati.", de: "Die Mitarbeiterdaten wurden nicht gelöscht.", zh: "员工信息未删除。", tr: "Çalışan bilgileri silinemedi."
    },
    "Les caractéristiques du tour-opérateur n'ont pas été supprimées.": {
        en: "Tour operator details were not deleted.", es: "Los datos del turoperador no han sido eliminados.", pt: "Os dados do operador turístico não foram eliminados.", it: "I dati del tour operator non sono stati eliminati.", de: "Die Reiseveranstalterdaten wurden nicht gelöscht.", zh: "旅游运营商信息未删除。", tr: "Tur operatörü bilgileri silinemedi."
    },
    "Le mot de passe actuel est incorrect.": {
        en: "Current password is incorrect.", es: "La contraseña actual es incorrecta.", pt: "A senha atual está incorreta.", it: "La password attuale non è corretta.", de: "Das aktuelle Passwort ist falsch.", zh: "当前密码不正确。", tr: "Mevcut şifre yanlış."
    },
    "Si votre adresse email est enregistrée dans notre système, vous recevrez un lien de réinitialisation.": {
        en: "If your email is registered in our system, you will receive a reset link.", es: "Si su correo está registrado en nuestro sistema, recibirá un enlace de restablecimiento.", pt: "Se o seu e-mail estiver registrado no nosso sistema, receberá um link de redefinição.", it: "Se la sua e-mail è registrata nel nostro sistema, riceverà un link di reimpostazione.", de: "Wenn Ihre E-Mail in unserem System registriert ist, erhalten Sie einen Link zum Zurücksetzen.", zh: "如果您的电子邮件已在我们系统中注册，您将收到重置链接。", tr: "E-posta adresiniz sistemimizde kayıtlıysa, sıfırlama bağlantısı alacaksınız."
    },
    "Une erreur est survenue lors de l'envoi de l'email": {
        en: "An error occurred while sending the email", es: "Se produjo un error al enviar el correo", pt: "Ocorreu um erro ao enviar o e-mail", it: "Si è verificato un errore durante l'invio dell'e-mail", de: "Beim Senden der E-Mail ist ein Fehler aufgetreten", zh: "发送电子邮件时出错", tr: "E-posta gönderilirken bir hata oluştu"
    },
    "L'employé n'a pas été enregistré car les valeurs saisies sont incomplètes.": {
        en: "The employee was not saved because the entered values are incomplete.", es: "El empleado no ha sido registrado porque los valores ingresados están incompletos.", pt: "O funcionário não foi registrado porque os valores introduzidos estão incompletos.", it: "Il dipendente non è stato registrato perché i valori inseriti sono incompleti.", de: "Der Mitarbeiter wurde nicht gespeichert, da die eingegebenen Werte unvollständig sind.", zh: "因输入值不完整，员工未保存。", tr: "Girilen değerler eksik olduğu için çalışan kaydedilemedi."
    },
    "Le tour-opérateur n'a pas été enregistré car les valeurs saisies sont incomplètes.": {
        en: "The tour operator was not saved because the entered values are incomplete.", es: "El turoperador no ha sido registrado porque los valores ingresados están incompletos.", pt: "O operador turístico não foi registrado porque os valores introduzidos estão incompletos.", it: "Il tour operator non è stato registrato perché i valori inseriti sono incompleti.", de: "Der Reiseveranstalter wurde nicht gespeichert, da die eingegebenen Werte unvollständig sind.", zh: "因输入值不完整，旅游运营商未保存。", tr: "Girilen değerler eksik olduğu için tur operatörü kaydedilemedi."
    },
    "Le mot de passe n'a pas été enregistré car les valeurs saisies sont incorrectes.": {
        en: "The password was not saved because the entered values are incorrect.", es: "La contraseña no ha sido registrada porque los valores ingresados son incorrectos.", pt: "A senha não foi registrada porque os valores introduzidos estão incorretos.", it: "La password non è stata registrata perché i valori inseriti non sono corretti.", de: "Das Passwort wurde nicht gespeichert, da die eingegebenen Werte falsch sind.", zh: "因输入值不正确，密码未保存。", tr: "Girilen değerler yanlış olduğu için şifre kaydedilemedi."
    },
    "Le nouveau mot de passe a bien été enregistré": {
        en: "The new password has been saved.", es: "La nueva contraseña ha sido guardada.", pt: "A nova senha foi guardada.", it: "La nuova password è stata salvata.", de: "Das neue Passwort wurde gespeichert.", zh: "新密码已保存。", tr: "Yeni şifre kaydedildi."
    },

    // Promotions
    "Ajout d'une promotion": {
        en: "Add a Promotion", es: "Añadir una promoción", pt: "Adicionar uma promoção", it: "Aggiunta di una promozione", de: "Aktion hinzufügen", zh: "添加促销", tr: "Promosyon Ekleme"
    },
    "Modification d'une promotion": {
        en: "Edit a Promotion", es: "Modificar una promoción", pt: "Modificar uma promoção", it: "Modifica di una promozione", de: "Aktion bearbeiten", zh: "修改促销", tr: "Promosyon Düzenleme"
    },
    "Thème : ": {
        en: "Theme: ", es: "Tema: ", pt: "Tema: ", it: "Tema: ", de: "Thema: ", zh: "主题：", tr: "Tema: "
    },
    "Veuillez sélectionner un thèmes": {
        en: "Please select a theme", es: "Seleccione un tema", pt: "Selecione um tema", it: "Selezionare un tema", de: "Bitte wählen Sie ein Thema", zh: "请选择一个主题", tr: "Lütfen bir tema seçin"
    },
    "Intitulé : ": {
        en: "Title: ", es: "Título: ", pt: "Título: ", it: "Titolo: ", de: "Bezeichnung: ", zh: "名称：", tr: "Başlık: "
    },
    "Saisissez l'intitulé": {
        en: "Enter the title", es: "Introduzca el título", pt: "Introduza o título", it: "Inserisca il titolo", de: "Geben Sie die Bezeichnung ein", zh: "请输入名称", tr: "Başlığı girin"
    },
    "Durée (en jour) : ": {
        en: "Duration (in days): ", es: "Duración (en días): ", pt: "Duração (em dias): ", it: "Durata (in giorni): ", de: "Dauer (in Tagen): ", zh: "时长（天）：", tr: "Süre (gün): "
    },
    "Saisissez la durée": {
        en: "Enter the duration", es: "Introduzca la duración", pt: "Introduza a duração", it: "Inserisca la durata", de: "Geben Sie die Dauer ein", zh: "请输入时长", tr: "Süreyi girin"
    },
    "Prix (en euro):": {
        en: "Price (in euros):", es: "Precio (en euros):", pt: "Preço (em euros):", it: "Prezzo (in euro):", de: "Preis (in Euro):", zh: "价格（欧元）：", tr: "Fiyat (euro):"
    },
    "Saisissez le prix": {
        en: "Enter the price", es: "Introduzca el precio", pt: "Introduza o preço", it: "Inserisca il prezzo", de: "Geben Sie den Preis ein", zh: "请输入价格", tr: "Fiyatı girin"
    },
    "Format: +indicatif suivi des numéros (ex: +33 6 12 34 56 78)": {
        en: "Format: +country code followed by numbers (e.g.: +33 6 12 34 56 78)", es: "Formato: +indicativo seguido de los números (ej: +33 6 12 34 56 78)", pt: "Formato: +indicativo seguido dos números (ex: +33 6 12 34 56 78)", it: "Formato: +prefisso seguito dai numeri (es: +33 6 12 34 56 78)", de: "Format: +Vorwahl gefolgt von Nummern (z.B.: +33 6 12 34 56 78)", zh: "格式：+国际区号后跟号码（例：+33 6 12 34 56 78）", tr: "Format: +ülke kodu ve ardından numaralar (örn: +33 6 12 34 56 78)"
    },
    "Erreur : ": {
        en: "Error: ", es: "Error: ", pt: "Erro: ", it: "Errore: ", de: "Fehler: ", zh: "错误：", tr: "Hata: "
    }
};

// Titres des pages
const titleTranslations = {
    "Site de l'agence Linkretz": {
        en: "Linkretz Agency Website", es: "Sitio de la agencia Linkretz", pt: "Site da agência Linkretz", it: "Sito dell'agenzia Linkretz", de: "Website der Agentur Linkretz", zh: "Linkretz旅行社网站", tr: "Linkretz Ajansı Web Sitesi"
    },
    "Page d'accueil": {
        en: "Home page", es: "Página de inicio", pt: "Página inicial", it: "Pagina iniziale", de: "Startseite", zh: "首页", tr: "Ana Sayfa"
    },
    "Liste des tour-opérateurs": {
        en: "List of Tour Operators", es: "Lista de turoperadores", pt: "Lista de operadores turísticos", it: "Lista dei tour operator", de: "Liste der Reiseveranstalter", zh: "旅游运营商列表", tr: "Tur Operatörleri Listesi"
    },
    "Liste des commerciaux": {
        en: "Salespeople List", es: "Lista de comerciales", pt: "Lista de comerciais", it: "Lista dei commerciali", de: "Vertriebsliste", zh: "销售人员列表", tr: "Satış Danışmanları Listesi"
    },
    "Nous contacter": {
        en: "Contact Us", es: "Contáctenos", pt: "Contacte-nos", it: "Contattaci", de: "Kontaktieren Sie uns", zh: "联系我们", tr: "Bize Ulaşın"
    },
    "Mentions légales": {
        en: "Legal Notice", es: "Aviso legal", pt: "Aviso legal", it: "Note legali", de: "Impressum", zh: "法律声明", tr: "Yasal Bildirim"
    },
    "Gestion des employés": {
        en: "Employee Management", es: "Gestión de empleados", pt: "Gestão de funcionários", it: "Gestione dipendenti", de: "Mitarbeiterverwaltung", zh: "员工管理", tr: "Çalışan Yönetimi"
    },
    "Gestion des tour-opérateurs": {
        en: "Tour Operator Management", es: "Gestión de turoperadores", pt: "Gestão de operadores turísticos", it: "Gestione tour operator", de: "Reiseveranstalterverwaltung", zh: "旅游运营商管理", tr: "Tur Operatörü Yönetimi"
    },
    "Ajouter employé": {
        en: "Add Employee", es: "Añadir empleado", pt: "Adicionar funcionário", it: "Aggiungere dipendente", de: "Mitarbeiter hinzufügen", zh: "添加员工", tr: "Çalışan Ekle"
    },
    "Ajouter un tour-opérateur": {
        en: "Add a Tour Operator", es: "Añadir un turoperador", pt: "Adicionar um operador turístico", it: "Aggiungere un tour operator", de: "Reiseveranstalter hinzufügen", zh: "添加旅游运营商", tr: "Tur Operatörü Ekle"
    },
    "Modification employé": {
        en: "Edit Employee", es: "Modificar empleado", pt: "Modificar funcionário", it: "Modifica dipendente", de: "Mitarbeiter bearbeiten", zh: "修改员工", tr: "Çalışan Düzenle"
    },
    "Modification d'un tour-opérateur": {
        en: "Edit a Tour Operator", es: "Modificar un turoperador", pt: "Modificar um operador turístico", it: "Modifica di un tour operator", de: "Reiseveranstalter bearbeiten", zh: "修改旅游运营商", tr: "Tur Operatörü Düzenle"
    },
    "Modification mot de passe": {
        en: "Change Password", es: "Cambiar contraseña", pt: "Alterar senha", it: "Modifica password", de: "Passwort ändern", zh: "修改密码", tr: "Şifre Değiştir"
    },
    "Panel Administrateur": {
        en: "Admin Panel", es: "Panel de administración", pt: "Painel de administração", it: "Pannello amministratore", de: "Administrationsbereich", zh: "管理面板", tr: "Yönetici Paneli"
    },
    "Panel Employé": {
        en: "Employee Panel", es: "Panel de empleados", pt: "Painel de funcionários", it: "Pannello dipendente", de: "Mitarbeiterbereich", zh: "员工面板", tr: "Çalışan Paneli"
    },
    "Demande d'information": {
        en: "Information Request", es: "Solicitud de información", pt: "Pedido de informação", it: "Richiesta di informazioni", de: "Informationsanfrage", zh: "信息请求", tr: "Bilgi Talebi"
    },
    "Liste des employés": {
        en: "Employee List", es: "Lista de empleados", pt: "Lista de funcionários", it: "Lista dipendenti", de: "Mitarbeiterliste", zh: "员工列表", tr: "Çalışan Listesi"
    },
    "Mot de passe oublié": {
        en: "Forgot Password", es: "Contraseña olvidada", pt: "Esqueceu a senha", it: "Password dimenticata", de: "Passwort vergessen", zh: "忘记密码", tr: "Şifremi Unuttum"
    },
    "Réinitialisation du mot de passe": {
        en: "Reset Password", es: "Restablecer contraseña", pt: "Redefinir senha", it: "Reimpostazione password", de: "Passwort zurücksetzen", zh: "重置密码", tr: "Şifre Sıfırlama"
    }
};

// Langue courante (par défaut français)
let currentLang = localStorage.getItem('linkretz_lang') || 'fr';

// Index inversé pour retrouver la clé FR à partir d'une traduction
let reverseIndex = {};
function buildReverseIndex() {
    reverseIndex = {};
    for (const [frKey, trObj] of Object.entries(translations)) {
        for (const [lang, text] of Object.entries(trObj)) {
            reverseIndex[text] = frKey;
        }
    }
}
buildReverseIndex();

// Fonction pour traduire un texte
function translateText(text, toLang) {
    const trimmed = text.trim();
    if (toLang === 'fr') {
        const frKey = reverseIndex[trimmed];
        return frKey || text;
    } else {
        if (translations[trimmed] && translations[trimmed][toLang]) {
            return translations[trimmed][toLang];
        }
        const frKey = reverseIndex[trimmed];
        if (frKey && translations[frKey] && translations[frKey][toLang]) {
            return translations[frKey][toLang];
        }
        return text;
    }
}

// Créer le sélecteur de langue dans le header
function createLangSelector() {
    const langSwitch = document.getElementById('lang-switch');
    if (!langSwitch) return;

    const wrapper = document.createElement('div');
    wrapper.className = 'lang-selector';
    wrapper.id = 'lang-selector';

    const currentBtn = document.createElement('button');
    currentBtn.className = 'lang-current';
    currentBtn.type = 'button';
    currentBtn.innerHTML = '<span class="fi ' + languages[currentLang].flag + '"></span> <span class="lang-arrow">▾</span>';
    currentBtn.setAttribute('aria-label', 'Choisir la langue');

    const dropdown = document.createElement('div');
    dropdown.className = 'lang-dropdown';

    for (const [code, info] of Object.entries(languages)) {
        const option = document.createElement('button');
        option.type = 'button';
        option.className = 'lang-option' + (code === currentLang ? ' active' : '');
        option.dataset.lang = code;
        option.innerHTML = '<span class="fi ' + info.flag + '"></span> ' + info.label;
        option.addEventListener('click', function(e) {
            e.stopPropagation();
            switchLang(code);
            dropdown.classList.remove('open');
        });
        dropdown.appendChild(option);
    }

    currentBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        dropdown.classList.toggle('open');
    });

    document.addEventListener('click', function() {
        dropdown.classList.remove('open');
    });

    wrapper.appendChild(currentBtn);
    wrapper.appendChild(dropdown);

    langSwitch.replaceWith(wrapper);
}

// Changer de langue
function switchLang(lang) {
    translatePage(lang);
    const selector = document.getElementById('lang-selector');
    if (selector) {
        const btn = selector.querySelector('.lang-current');
        if (btn) {
            btn.innerHTML = '<span class="fi ' + languages[lang].flag + '"></span> <span class="lang-arrow">▾</span>';
        }
        selector.querySelectorAll('.lang-option').forEach(opt => {
            opt.classList.toggle('active', opt.dataset.lang === lang);
        });
    }
}

// Traduire les nœuds texte d'un élément
function translateTextNodes(el, lang) {
    el.childNodes.forEach(node => {
        if (node.nodeType === Node.TEXT_NODE && node.textContent.trim()) {
            const translated = translateText(node.textContent, lang);
            if (translated !== node.textContent) {
                node.textContent = translated;
            }
        }
    });
}

// Fonction pour traduire tous les éléments textuels de la page
function translatePage(lang) {
    currentLang = lang;
    localStorage.setItem('linkretz_lang', lang);

    const langCodes = { fr: 'fr-FR', en: 'en', es: 'es', pt: 'pt', it: 'it', de: 'de', zh: 'zh', tr: 'tr' };
    document.documentElement.lang = langCodes[lang] || lang;

    // Traduire tous les éléments susceptibles de contenir du texte (y compris li, p, div.sec, span)
    const textElements = document.querySelectorAll('h1, h2, h3, h4, h5, h6, p, li, label, th, td, option, button, textarea, a, legend, dt, dd, span, div.sec');

    textElements.forEach(el => {
        if (el.closest('.lang-selector')) return;
        // Toujours parcourir les nœuds texte directs de chaque élément
        translateTextNodes(el, lang);
    });

    // Traduire les placeholders
    document.querySelectorAll('[placeholder]').forEach(el => {
        const translated = translateText(el.getAttribute('placeholder'), lang);
        if (translated !== el.getAttribute('placeholder')) {
            el.setAttribute('placeholder', translated);
        }
    });

    // Traduire les attributs title
    document.querySelectorAll('[title]').forEach(el => {
        if (el.closest('.lang-selector')) return;
        const translated = translateText(el.getAttribute('title'), lang);
        if (translated !== el.getAttribute('title')) {
            el.setAttribute('title', translated);
        }
    });

    // Traduire les attributs value des boutons submit
    document.querySelectorAll('input[type="submit"], input[type="button"]').forEach(el => {
        const translated = translateText(el.value, lang);
        if (translated !== el.value) {
            el.value = translated;
        }
    });

    // Traduire le title de la page
    const titleEl = document.querySelector('title');
    if (titleEl) {
        let title = titleEl.textContent;
        if (lang === 'fr') {
            for (const [frText, trObj] of Object.entries(titleTranslations)) {
                for (const translated of Object.values(trObj)) {
                    title = title.replace(translated, frText);
                }
            }
        } else {
            for (const [frText, trObj] of Object.entries(titleTranslations)) {
                for (const translated of Object.values(trObj)) {
                    title = title.replace(translated, frText);
                }
            }
            for (const [frText, trObj] of Object.entries(titleTranslations)) {
                if (trObj[lang]) {
                    title = title.replace(frText, trObj[lang]);
                }
            }
        }
        titleEl.textContent = title;
    }

    // Traduire les éléments avec data-fr / data-en (contenu dynamique de la BD)
    document.querySelectorAll('[data-fr]').forEach(el => {
        if (lang === 'fr') {
            el.textContent = el.getAttribute('data-fr');
        } else if (lang === 'en' && el.hasAttribute('data-en')) {
            el.textContent = el.getAttribute('data-en');
        } else {
            const frText = el.getAttribute('data-fr');
            const translated = translateText(frText, lang);
            if (translated !== frText) {
                el.textContent = translated;
            } else if (el.hasAttribute('data-en')) {
                el.textContent = el.getAttribute('data-en');
            } else {
                el.textContent = frText;
            }
        }
    });
}

// Ancienne fonction conservée pour compatibilité
function toggleLang() {
    const langKeys = Object.keys(languages);
    const idx = langKeys.indexOf(currentLang);
    const nextLang = langKeys[(idx + 1) % langKeys.length];
    switchLang(nextLang);
}

// Appliquer la langue sauvegardée au chargement
document.addEventListener('DOMContentLoaded', function() {
    createLangSelector();
    if (currentLang !== 'fr') {
        translatePage(currentLang);
    }

    // Observer les modifications du DOM pour traduire le contenu dynamique (messages de validation JS)
    const observer = new MutationObserver(function(mutations) {
        if (currentLang === 'fr') return;
        mutations.forEach(function(mutation) {
            mutation.addedNodes.forEach(function(node) {
                if (node.nodeType === Node.TEXT_NODE && node.textContent.trim()) {
                    const translated = translateText(node.textContent, currentLang);
                    if (translated !== node.textContent) {
                        node.textContent = translated;
                    }
                } else if (node.nodeType === Node.ELEMENT_NODE) {
                    if (node.closest && node.closest('.lang-selector')) return;
                    translateTextNodes(node, currentLang);
                    node.querySelectorAll && node.querySelectorAll('*').forEach(function(child) {
                        translateTextNodes(child, currentLang);
                    });
                }
            });
        });
    });
    observer.observe(document.body, { childList: true, subtree: true });
});