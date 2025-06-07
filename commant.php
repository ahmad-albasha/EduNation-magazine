
<?php
require_once 'con.php';


if(empty($_POST['fname'])|| empty($_POST['lname'])||empty($_POST['comment']))
echo"please enter all data";
else
    {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$comment=$_POST['comment'];

$sql_add_query="insert into `comment`(`fname`, `lname`, `comment`) values('$fname','$lname','$comment')";
if(mysqli_query($con,$sql_add_query)===FALSE)die("could not add data".mysqli_errno($con));
 echo '<script type="text/javascript"> alert("Registered successfully   ") </script>'; 
    }
  
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduNation</title>
    <link rel="stylesheet" href="magazine.css">
    <script src="magazin.js"></script>
</head>
<body>
<?php
       if(isset($_COOKIE['name']) && !empty($_COOKIE['name'])) {
        $username = $_COOKIE['name'];
        echo "Welcome $username  <br/>";
     } else {
         setcookie('name', 'ahmad', time() + 2 * 60 * 60); 
         echo "Cookie has been set for 'ahmad'.<br/>";
     }
        ?>
    <div class="div1">
        <img src="IMG_0861.PNG" alt="">
        <h1>EduNation</h1>
        <button value="color" onclick="Color()"> Dark mode</button>
        <a href="login.php"> <button>Login</button> </a>

      
    </div>

    <div class="div2">
        <ul class="mune">
            <li><a href="#">Home</a></li>
            <li><a href="https://educationliu.my.canva.site/edunation-magazine" target="_blank">Issue 1</a></li>
            <li><a href="https://edunationmagazine.com/" target="_blank">Issue 2</a></li>
            <li><a href="#">Contact</a></li>

        </ul>
    </div>

    <div class="div3">
        <video src="podcast.mp4" controls></video>
        <p>
            Stress is a common challenge for university students, but there are effective techniques to manage and prevent it. Here’s a preview of what you can expect in this section of our magazine:<br><br>
    
    Mindfulness and Meditation: Learn how mindfulness practices and meditation can help reduce stress levels by promoting relaxation and mental clarity.<br><br>
    
    Time Management Strategies: Discover effective tips for prioritizing tasks, creating schedules, and managing deadlines to minimize stress from academic workload.<br><br>
    
    Physical Exercise and Wellness: Explore the benefits of regular exercise in combating stress, improving mood, and enhancing overall well-being.<br><br>
    
    Healthy Lifestyle Choices: Understand the importance of nutrition, hydration, and adequate sleep in maintaining a balanced and resilient mind and body.<br><br>
    
    Social Support Networks: Learn how building strong relationships and seeking support from friends, family, or campus resources can alleviate stress.<br><br>
    
    Cognitive Behavioral Techniques: Explore cognitive restructuring and other techniques to change negative thought patterns and promote a positive mindset.<br><br>
    
    Relaxation Techniques: Techniques such as deep breathing exercises, progressive muscle relaxation, and guided imagery can induce relaxation and reduce stress levels.<br><br>
    
    Hobbies and Creative Outlets: Engaging in hobbies and creative activities provides a valuable outlet for stress relief and promotes mental relaxation.<br><br>
    
    By incorporating these techniques into your daily routine, you can effectively manage stress and maintain a healthy balance during your university journey. Stay tuned for in-depth articles and practical advice in our upcoming magazine issue! 
<h4 class="Writer">Lama Mehyeldine</h4>        
</p>

    </div>

    <div class="brunch">
        <h2 class="title">Brunch IX</h2>
        <h3 class="sub-title">give your shaer to show you care!</h3>
        <h3>9/5/2024</h3>

      <p>مسكت آلة التصوير الخاصة بي ورحت أبحث عن شيء لأصوّره. كنت ضائعةً بعض الشيء وشعرت أنني لا أنتمي إلى أيّ بقعةٍ أطأ قدمي عليها.<br>
        حاولت التقاط بعض الصور العشوائيّة للأطفال والألعاب والطعام.. شعرت أنني مجبرةٌ على أن أكون في مكان لا أريد التواجد فيه.<br>
        احتميت قليلاً تحت إحدى المظلات الكبيرة قرب برج الساعة عندما لفت نظري مجموعة أطفالٍ يلعبون فيما بينهم.<br>
        نادتني إحدى الطالبات بابتسامة خجولةٍ مستأذنةً منّي بالتقاط صورةٍ مع صديقاتها. لم أعلم قبل تلك اللحظة قدرة صورةٍ تذكاريّةٍ على إسعاد الأطفال الصغار.<br>
        صورةٌ لربّما لا تعني للمصور أدنى أهمية، لكنها الطفولة بحدّ ذاتها لكبار المستقبل البعيد.<br>
        نظرت إلى الصور فرأيت في وجوههم براءةً عبقريّةً كان تأثيرها أقوى من أيّ مُخدّرٍ أستطيع التفكير به.<br>
        تلك النظرة الخاطفة التي لمحتها في وجوههم ذكّرتني بذلك المنزل الكبير في القرية البعيدة التي اعتدنا أن نجتمع فيه كلَّ أسبوع قبل أن تعرف حروف الأبجديّة طريقها إلى فمنا الصغير.<br>
        الواقع اليوم مؤلم، والطريق الوحيد للاستمرار يتطلّب الإيمان والصبر والأمل: الأمل بما تبقّى من إنسانية لدى "الإنسان"، والصبر على خطوات النصر والتحرير الذي سيبدأ من غزة ويتوسع لفلسطين ثم العالم بأسره.. فطريق فلسطين هو طريق الحرية، وتبدأ الحرية عند تنشأة وتربية جيل تترسخ في قلبه كلمة فلسطين.<br>
        ما فعله أطفال البقاع خلال هذا النشاط كان مبادرةً صغيرة لدعم أبناء غزة بأبسط طريقة ممكنة على أمل رسم ابتسامة الأمل على شفاه الصغار في غزة.. فالأطفال يحبون اللعب فيما بينهم، وربما يوماً ما سيلعبون مع أطفال غزة جنباً إلى جنب في منزلٍ كبيرٍ أو قرية صغيرة على شاطئ بحر عكا أو ربما بيروت..
        <h4 class="Writer" id="ar">Sarah Farhat</h4>

    </p>
    

        <video src="brunch.mp4" controls></video>
        <video src="" controls></video>
        
    </div>

    <div class="edunation">
      
        <h2 class="title">The Life of an LIU Student </h2>
        <h3 class="sub-title">as an EduNation Member</h3>
        <p> We've grown up hearing, “School is your second home." However, I never felt like that throughout my entire academic journey—not until I joined and co-founded the EduNation Club of the Lebanese International University's Education Department during my first year at it.<br><br>
         
            Growing up, we didn’t have opportunities in school or in high school to be members of a club, but that all changed when I found my people at the university and took the initiative to launch the EduNation Club, LIU’s beating heart.<br><br>
            
            Our day starts like any other day for any university student. However, there's something extra special—an amazing place to go when we're in our highs or lows. The club is located inside the Education Department, so we spend most of our time there.<br><br>
            
            Upon arriving at the department, you are greeted by the amazing smile of our beloved Dean Assistant, Mr. Ahmad Sharanik. He is always more than ready to answer any questions we have regarding the department's majors (TESL or CHED). He is the one who always manages our requests for any of the club's activities. What we love about him the most is that he always prevents us from messing things up. If you have some time to kill accompanied by two coffee mugs, Mr. Ahmad is the destination to go for a good laugh. His mesmerizing spirit always fills the atmosphere with great positivity. Thank you, Ahmad; we love you!<br><br>
            
            The department has 19 of the best educators to ever exist. Well, I am not saying this because I'm being biased toward our instructors, but they actually are the best. Our instructors always make us feel welcomed when we need any support. They are always there by our sides to help us with our academics and club activities. What surprised us the most is that we built a parental-kid relationship with the Education Department's instructors, thanks to their big and generous hearts. Their lovely spirits and bright, loving faces are reminders that life is beautiful in spite of the hardships.<br><br>
            
            The club meetings that we regularly have are to die for. Contrary to common belief, these meetings don’t resemble regular meetings where the leader or the founder takes control of everything and the members nod their heads in approval. These meetings are more of a friendly gathering where every opinion is accepted and every inquiry is shared. Not once have we had a meeting where we did not come up with a perfect plan for the upcoming club event that always led to substantial results.<br><br>
            
            Because the EduNation club is inclusive of everyone, it includes members from various majors such as Math and Computer Science, in addition to different nationalities and religions. As a result, this gave us the great honor of forming amazing friendships outside of the Education Department.<br><br>
            
            Personally, my favorite thing to do inside the club is when we gather all together, preparing for any activity that we have the next day. Accompanied by beverages and music, we are not forced to prepare; we would eagerly wait for the time to hang out all together and savor memories that will remain in our hearts for the rest of our lives.<br><br>
            
            The EduNation Club has been around for a year now, and it has successfully completed over 10 events. We have been able to raise over $15,000 in these dark times, intended as aid for multiple destinations. We proudly secured our club as one of the most successful clubs that were established at LIU. We are proud to say, with great honor, that we are EduNation members.<br><br>
            
            The EduNation club is just starting, and we ask for God’s help to keep this success ongoing for generations of inspiring university students yet to come.<br><br>
            
            EduNation, they are the ones to inspire.<br><br>
            EduNation, with whom every nation prospers!       <h4 class="Writer">Mustafa Ali Abou Yassin</h4>
        </p>
       <img src="WhatsApp Image 2024-07-28 at 7.16.36 PM.jpeg" alt="">    
        <img src="WhatsApp Image 2024-07-28 at 7.24.14 PM.jpeg" alt="">
    </div>
  <div class="our">
    
    <h2 class="title">Our Activities</h2>
    <h3 class="sub-title">Book Sale 3</h3>
    <p>Books are the cheapest travel tickets one could find, and our booksale is always the best place to find them.<br><br>
        This year, it was all for Palestine. Our third book sale, arranged by the Edunation Club during the spring semester of 2024, was a great success.<br><br>
        In the time that Palestine needed any possible support, we tried to find a way to help. Our annual booksale event was the perfect way.<br><br>
        For two weeks in a row, we were able to get more than $300 just by selling donated books (whether university or other kinds of books), as well as bookmarks.<br><br>
        Half of the acquired money was sent directly to Palestine, and the other half was invested in a greater event named the Brunch. (Know more about the Brunch.)<br><br>
        The booksale is usually an important event for helping students donate and find used books at suitable prices, making reading accessible to all. But this year, it had more value for all of us.<br><br>
        Books have always been a nice window into our world; now there is a way to give others the chance to look through your windows and read what you have read.<br><br>
        We will be waiting for you to donate and take books that hold mysteries, adventures, and unknown universes.<h4 class="Writer">Bayan Aloush</h4>
    </p>
<img src="WhatsApp Image 2024-07-29 at 6.51.28 PM.jpeg" alt=""> 

</div> 


<div class="care">

     <div class="Healthcare">
      <h2 class="title">Healthcare</h2>
        <p> Artificial Intelligence Associated with Medical Diagnosis.<br>
            How did artificial intelligence improve medical diagnosis through modern technology?<br>
            "The audit reviewed several studies that dealt with the use of artificial intelligence in different areas of medical diagnosis. It also confirmed that artificial intelligence can improve the accuracy and efficiency of diagnosis but requires further studies to ascertain its reliability in different clinical diagnostic environments." BMJ magazine (British Medical Journal).<br>
            Recently, a new invention that simulates the human mind, artificial intelligence, has played an important role and brought about change in many fields and disciplines, supported by automated learning algorithms and smart data analysis systems, its role and the provision of therapeutic diagnostics. It works to improve and increase the efficiency of health care and its management. Medical diagnosis relies on a variety of techniques and systems, such as Deep Learning, Machine Learning and Natural Language Treatment. These models are trained on vast amounts of medical data, including medical photographs.<br>
            Gene analysis and smart phone applications.<br>
            These smart algorithms have been marked by their ability to analyze medical images through X-ray analysis and their ability to learn to see patterns in a way similar to doctors.<br>
            And the conclusion is very clear: Artificial intelligence algorithms are extensively used to diagnose lung symptoms, heart disease and skin lesions through MRI and CT images. An artificial intelligence research in medicine has been completed to detect patterns in genetic sequence, enabling the identification of genetic mutations and associated diseases. One of the most prominent systems is CRISPR_case; it is used to develop the RNA manual with high accuracy and minimizes potential side effects. For example, CRISPR technology is used to manage gene mutations causing cystic fibrosis in human cells, opening the door to future genetic treatments and enhancing the effectiveness and safety of genetic editing applications. Artificial intelligence has evolved to become an important part of medical diagnosis through a series of applications:<br>
            AliveCor Kardia, which is used to monitor heartbeats.<br>
            Babylon Health, which enables patients to consult remotely and communicate with doctors via video call.<br>
            Access, which offers specialized medical information for doctors, including clinical research and evidence.<br>
            PillPack, which is responsible for reminding patients of the dates of their medications. All of this has been positively reflected in improved health care, reduced medical errors and early detection of diseases, which has reduced the burden on doctors.<br>
            Despite the benefits it has achieved, some medical challenges must be met. Access to sensitive medical information that penetrates privacy and safety is not easy, and controls must be put in place to protect patients and ensure that they are used responsibly to protect patients from any potential abuse, which scientists and researchers have done and are seeking to develop.<br>
            In conclusion, artificial intelligence has revolutionized medical diagnosis, offering great benefits from accuracy and speed of treatment, facing all the challenges that have created remarkable progress in treating patients, predicting a positive future that ensures complementarity with health systems and continuity in progressing at the lowest costs and risks, trapping and reducing the most serious diseases and strengthening efforts to maintain privacy and security to ensure the safe use of this technology.<br>
            And here I'm going to ask a debatable question: How can artificial intelligence techniques help predict the spread of epidemics and infectious diseases?
        <h4 class="Writer">Haneen Kassm </h4>
        </p>

</div>

<div class="google">
    <h2 class="title">The Cons of Using Google For Self Mental Health Diagnosis</h2>
    <p>
        Nowadays, the Internet is an indispensable source for information. People rely on it for everything. As an example, trusting websites like Google with their mental health. However, Google was never the right place for self-mental health diagnosis, and it will never be.<br>
        To begin with, Google did not graduate from university with a psychology degree. It cannot analyze our behavior due to not being qualified enough, nor are we! In addition, websites like Wikipedia are not trusted, so we cannot trust all the information we get from it. Let's not forget that many mental conditions have similar symptoms that only professionals can differentiate between them. All these can lead to a wrong self-diagnosis for our mental health. Self-diagnosis also leads to self-treatment sometimes. As a result, wrong self-diagnosis leads to wrong self-treatment too. This will only make our mental condition worse.<br>
        Instead of seeking unprofessional help from Google and other websites, it's better to seek professional help from a psychologist that has trained for years to be objective in his diagnosis. He or she will be able, through his wide experience, to give us the right diagnosis with the right treatment. A psychologist can figure out hidden stuff inside us that has traumatized us leading us to this mental condition through comprehensive analysis, which cannot be figured out by Google no matter what.<br>
        This implies that for an effective treatment and improvement, there must be a correct diagnosis that cannot be achieved using Google and requires a professional help from trained psychologists.
    <h4 class="Writer">Mariam Abou Al Hajj</h4>
    </p>
    
</div>

</div>

<div class="quit">
        <div class="quit1">
            <h2 class="title">النسيان</h2>
            <p>في بعض الأحيان، يعتبر النسيان نعمة كبيرة قد يحصل عليها الإنسان. هناك الكثير من الأشياء التي لا يمكن للإنسان مواجهتها عند معرفتها. في نفس الوقت، يجب على الإنسان معرفة الكثير مما يحدث في العالم، ولكننا نتعرض لتنويم غير مباشر لأننا نعتبر سلعًا ولا يحق لنا معرفة كل شيء نريده. وبمثل سياسي ساخر:<br><br>

                - الفاشية: عندك بقرتان، الدولة تأخذهما وتبيعك الحليب.<br>
                - الشيوعية: عندك بقرتان، الدولة تأخذهما وتعطيك قليلاً من الحليب.<br>
                - البيروقراطية: عندك بقرتان، تقتل بقرة، تحلب بقرة وترمي الحليب في النفايات.<br>
                - النظام الفرنسي: عندك بقرتان، تقوم بالتظاهر وقطع الطريق وإحداث شغب لأنك تريد ثلاث بقرات.<br>
                - النظام الهندي: عندك بقرتان، تقوم بعبادتهما.<br>
                - النظام العربي: عندك بقرتان، تقوم بحلبهما، تعطي الحليب لعدوك ثم تشتريه منه بسعر أكبر.<br><br>
            
                فما هي الديمقراطية التي نعيشها الآن؟ هي أسوأ بكثير من باقي الأنظمة لأننا نعيش تحت مفهوم الديمقراطية.<br>
                في هذه الأحداث التي تحدث، لم يتم العثور على جواب أو توضيح لما حصل لأن الناس ليست مهتمة بهذه الأحداث التي ترتبط ببعضها البعض، بل تقضي جميع وقتها على مواقع التواصل الاجتماعي وهذا ما يسمى بالتنويم.<br>
                ما الذي يوجد في جوف الأرض؟ هل توجد قبائل لم يتم التعرف عليها؟ ما الذي يوجد في المنطقة ٥١؟ هل تم العثور على الناس الضائعة؟ ما الذي يحدث في مثلث برمودا؟ هل خريطة العالم صحيحة؟ لماذا توقفت وكالة ناسا عن اكتشاف المحيط؟ هل لأنه توجد أشياء خفية أو مخلوقات أخرى؟ هل توجد ممرات ومدن خفية في الأهرامات؟ وهل تاريخنا فعلاً صحيح؟<br>
                شيء مخيف أن نكون نحن المخلوقات الحية الوحيدة في الكون، والمخيف أكثر هو وجود مخلوقات أخرى لا نعرف عنها كالفضائيين.. مضحك.<br>
                تخيّل معي عزيزي القارئ أنه يوجد فضائيون، نعم لم لا؟ ففي كل الأفلام التي نشاهدها، جميع الفضائيين يشبهون بعضهم، كما أنه توجد منحوتات لهم منذ آلاف السنين في العديد من الدول. فكيف على الإنسان القديم أن يرسم شيئًا لم يره؟<br>
                التعمق في كل هذا هو مفتاح المعرفة لكل شيء يحصل حولنا. لا تستكشف كما يفعل الأطفال للتسلية، أو كالكبار من أجل التعلم، بل استكشف لتعيش، فالمعرفة حياة.<br>
                فأشباه المفكرين أخطر من الملحدين والمستبدين بالأمم عبر التاريخ. احتلوا التاريخ بالتحريف، احتلوا الدين بإنشاء شخصيات هزلية موازية، احتلوا الشرائع بالفرقة، احتلوا الطوائف والمذاهب والقبائل والشعوب والعشائر والنعرات، واحتلوا عقل النشء الحديث بلغة التنوير المبهم!<br>
                كل هذه الاحتلالات كانت وما زالت تختبئ تحت ثوب الشرائع، ومع كل هذه التقنيات التي تظهر الآن (الهولوغرام، الذكاء الاصطناعي...) من السهل خداع والسيطرة على العقول بسرعة.
            <h4 class="Writer">Celine Marmash</h4>
            </p>
            
        </div>

    <div class="quit2">
        <h2 class="title">Quit</h2>
        <p>
        You walk alongside the road and sigh as you are going home from college for the day. <br>
        You had an exam and three major courses; you also felt really overwhelmed. <br>
        So many thoughts intrusively popped in your head without your consent. <br>
        “Is my effort even worth it?” <br>
        “Will I be rewarded with good results? Or will everything be gone with the wind?” <br>
        “Should I... quit?” <br>
        Here is when you stop walking and stare at the ground blankly. <br>
        Quit? <br>
        Then you keep telling yourself, “I'm not even talented or special in any type of way... <br>
        There's no guarantee that I'll be successful in the future. <br>
        Maybe this is all a waste.” <br>
        You grumble and keep walking home, trying to ignore these thoughts. <br>
        When you arrive home, you are obliged to clean up your bookshelf, which looked like an old hidden cave. <br>
        So, brace yourself and get ready to enter this deep mine of memories. <br>
        You start taking out your books one by one. <br>
        You still kept the English reading book you liked from middle school. <br>
        You smile and take out more books. <br>
        You still had a high school book that you didn't know how to get rid of. <br>
        Then you take out your college books and feel a strange feeling. <br>
        “Man,” you say to yourself, “I've really come a long way.” <br>
        Then a paper slips from a book you take out, entitled "Quitting.” <br>
        It was a letter your friend gave you when you were at school. <br>
        It read: <br>
        “When you feel like quitting, remember why you started. <br>
        Remember what you're doing it all for. <br>
        Too tired. Too hard. Too busy. <br>
        No excuses! <br>
        I have too much to fight for! <br>
        I will never quit. <br>
        It all comes down to one question in the end. <br>
        How bad do you want it?” <br>
        You smile to yourself and feel something refreshing in your chest. <br>
        New thoughts pop into your head, and you kick out the old ones. <br>
        “I got this!!!” <br>
        … <br>
        We often tend to belittle these achievements we make since we think they are normal for everyone to achieve. <br>
        However, if you look back, you notice the big steps you took. <br>
        You realize your steps were great after all. <br>
        We also often tend to like easier choices. <br>
        Yet, being successful is only possible by taking the tough road. <br>
        That's what makes it feel good in the end anyway. <br>
        No one is going to get this done other than you. <br>
        Push through it, build big dreams, and work hard. <br>
        You got this. <br>
        <h4 class="Writer">Asmaa Abdel-Baki</h4>

        </p>
        
    </div>
</div>
<div class="potry">
    <h2 class="title">Potry</h2>
    <h3 class="sub-title">ليلةٌ مُظْلِمَةٌ</h2>
    <p class="aradic">
        وكأنها عاصفةٌ، كاد غبارُها يُهْلِكُنِي، بل يقتُلُني.<br>
        وكأنّها هبَّت بداخلي وأيقظتْ كلَّ ذكرياتي التي لطالما حاولتُ طيَّ صفحاتِها، وكأنَّ هذه النسمةَ تلعبُ بكتابِي، ورقةً تلو الأخرى، حتى وصلتْ إلى الصفحةِ الأولى...<br>
        عندها تفتَّحتْ كلُّ جروحي، كمثلِ زهرةٍ تتفتح أوراقُها، ما أجملَها!! ولكنّها جروحٌ خاليةٌ من الجمال...<br>
        وبدأتْ هذه الأحاسيسُ تحيطُ بعقلي، وأشعلتْ نيرانَها وأحرقتْ كلَّ ما بداخلي، حتى أصبح رمادُها متراكمًا فوقها فهبّتْ نسمةٌ أخرى، وما لبثتُ أن ألتقطَ أنفاسي حتى خرجَ هذا الرمادُ مع النفسِ، وتوهَّجَتْ نيرانُها من جديد، فبكيتُ وبكيتُ ولكن لم يكن مدمعي كافيًا ليطفئَ هذه النيران، إنّها ساعاتٌ قصيرةٌ، ولكنّها...<br>
        عادتْ بي عشرينَ سنةً إلى الوراء، إلى ذاكَ الزمنِ الذي لطالما كافحتُ للخروجِ منه.
        </p><h4 class="Writer" id="ar">Reem Arafat</h4>
    
        <p>I started to write <br>
            Because
             I craved to heal <br>
            <br>
            Not necessarily from traumas <br>
            <br>
            but feelings <br>
            I was too tired to feel <br>
            <br>
            My soul needed rest <br>
            My mind needed peace <br>
            <br>
            I asked and asked my heart <br>
            <br>
            How could I let go of this shield? <br>
            <br>
            The shield that was built <br>
            after years of struggles <br>
            <br>
            Struggling <br>
            to breathe and to believe <br>
            <br>
            Because I was <br>
            <br>
            heartbroken <br>
            mind broken <br>
            <br>
            And soulfully crumbled <br>
            <br>
            spiraling in my brokers <br>
            <br>
            How could I forget? <br>
            How could I redeem it? <br>
            <br>
            Years that went by <br>
            And, I was too blind <br>
            To find the real me <br>
            <br>
            How could I? <br>
            Yes, I could <br>
            <br>
            Because I wasn’t <br>
            going to drown in my weaknesses <br>
            <br>
            I was going to use them <br>
            to finally feel good, <br>
            <br>
            finally feel free.
        </p>
        <h4 class="Writer">Nataly Aboultaif</h4>

            
    </div>

<div class="tips">
    <h2 class="title">Tips</h2>
    <h3 class="sub-title">Stuck with overthinking? <br>
    </h3>
        <ol> <h4>Overthinking tends to occur for the following reasons:</h4>
       <li>  Fear of making mistakes</li>
       <li>  Boredom</li>
       <li>  Too much screen time</li>
       <li>  Lack of communication </li>
       <li>  Stress</li>
       <li>  Perfectionism </li>
    </ol>
        <ol>
         <h4>Tips on how to stop it!</h4>
        <li>Face your fears.</li> 
        <li>Keep yourself busy!</li>
        <li>Limit screen time.</li>
        <li>Talk things out; communicate!</li>
        <li>Look at the big picture, not the details.</li>
        <li>Be aware of what you can control and what is beyond that.</li>
        <li>Keep track of your thoughts; notice when you're doing it.</li>
        </ol><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br>
        <h4 class="Writer">Asmaa Abdel-Baki</h4>
    </div>

    <div class="div6">
        <h2 class="title">Send photo to us</h2>
       <a href="ajax.php"> <button class="uplode">uplode file</button></a>
    </div>


    <div class="form"> 
    <div class="form">
            <h2 class="title">Comment</h2>
            <form method="post" action= "commant.php"  class="form1">
                <p>
                    first name<br>
                    <input type="text" name="fname" id="fname" required>
                </p> 
                <p>
                    last name<br>
                    <input type="text" name="lname" id="lname" required>
                </p>
                <p>
                    Comment<br>
                    <textarea name="comment" id="comment" required></textarea>
                </p>
                <button type="submit" name="submit">post</button>
            </form>



       <table class="comtable">
            <tr>
                <th>First Name</th>
                <th>last name</th>
                <th>Comment</th>
            </tr>
            <?php
            $result = mysqli_query($con, "SELECT * FROM comment ORDER BY fname DESC");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['fname']) . "</td>
                            <td>" . htmlspecialchars($row['lname']) . "</td>
                            <td>" . htmlspecialchars($row['comment']) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>لا توجد تعليقات لعرضها.</td></tr>";
            }
            ?>
        </table>
        
        </div> 
    </div> 

   


    <div class="div5">
        <h1>EduNation magazine &copf; 2024</h1>
    </div>
</body>
</html>

