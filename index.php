<?php
declare(strict_types=1);

$page = $_GET['page'] ?? '';
$legalPages = [
    'terms' => 'תנאי שימוש',
    'privacy' => 'מדיניות פרטיות',
];
?>
<!doctype html>
<html lang="he" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#14121f">
    <title><?= isset($legalPages[$page]) ? htmlspecialchars($legalPages[$page], ENT_QUOTES, 'UTF-8') . ' | ' : '' ?>תאר אותי</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="landing.css?v=20261101-4">
    <link rel="stylesheet" href="results.css">
</head>
<body>
<?php if (isset($legalPages[$page])): ?>
    <main class="shell legal-shell">
        <article class="app legal-page">
            <a class="back-link" href="index.php">← חזרה לדף הבית</a>
            <header class="legal-header">
                <h1><?= htmlspecialchars($legalPages[$page], ENT_QUOTES, 'UTF-8') ?></h1>
                <p>עודכן לאחרונה: <time datetime="2026-11-01">1 בנובמבר 2026</time></p>
                <nav class="legal-jump" aria-label="ניווט במסמכים המשפטיים">
                    <a href="?page=terms"<?= $page === 'terms' ? ' aria-current="page"' : '' ?>>תנאי שימוש</a>
                    <a href="?page=privacy"<?= $page === 'privacy' ? ' aria-current="page"' : '' ?>>מדיניות פרטיות</a>
                </nav>
            </header>
            <?php if ($page === 'terms'): ?>
                <section id="terms-intro"><h2>1. פתיח והסכמה</h2><p>ברוכים הבאים ל״תאר אותי״ — משחק חברתי מקוון שבו חברים וחברות מתארים זה את זה ומנחשים. תנאים אלה מסדירים את הגישה לאתר ואת השימוש בו. שימוש באתר, יצירת חדר או הצטרפות לחדר מהווים הסכמה לתנאים ולמדיניות הפרטיות.</p><p>אם אינך מסכים/ה לתנאים, אין להשתמש באתר או להצטרף לחדר משחק.</p></section>
                <section id="terms-definitions"><h2>2. הגדרות</h2><p><strong>״האתר״</strong> הוא אתר תאר אותי. <strong>״מפעילת האתר״</strong> היא מי שמפעילה את האתר במסגרת הדומיין h1la.com. <strong>״מארגן/ת״</strong> הוא/היא מי שיוצר/ת חדר ושולח/ת קישור הזמנה. <strong>״משתתף/ת״</strong> הוא/היא כל מי שמצטרף/ת לחדר. <strong>״תוכן״</strong> כולל שם תצוגה, בחירת דמות, פעולות משחק, ניחושים, ניקוד ונתוני חדר.</p></section>
                <section id="terms-service"><h2>3. השירות והשימוש בו</h2><p>האתר נועד למשחק חברתי, אישי ולא־מסחרי. אין בו חשבונות משתמש, מנויים, רכישות או שירותי תשלום. לכל משתמש/ת ניתנת זכות אישית, מוגבלת וניתנת לביטול להשתמש באתר למטרה זו בלבד.</p><p>המשחק והאתר ניתנים כפי שהם וכפי שהם זמינים. אין הבטחה לזמינות רציפה, לשמירת חדר, לניקוד מסוים או להשלמת משחק ללא תקלה.</p></section>
                <section id="terms-conduct"><h2>4. כללי השתתפות</h2><p>יש לבחור שם תצוגה מכבד ולהשתמש באתר באופן חוקי ומתחשב. אין להשתמש באתר כדי להטריד, לאיים, להשפיל, להתחזות לאחרים, להפיץ תוכן פוגעני או בלתי חוקי, לנסות לקבל גישה לא מורשית, לפגוע בשירות או להפריע למשחק של אחרים.</p><p>אין להזין במשחק מידע אישי רגיש או פרטים של אדם אחר שאינך מורשה/ית לשתף. אין להפיץ קישור הזמנה לחדר לאנשים שלא נועדו להשתתף בו.</p></section>
                <section id="terms-organizers"><h2>5. אחריות המארגן/ת והמשתתפים</h2><p>המארגן/ת אחראי/ת לבחירת המשתתפים ולשיתוף קישור ההזמנה. כל משתתף/ת אחראי/ת להתנהלותו/ה במהלך המשחק ולמה שנאמר או משותף מחוץ לאתר כחלק מהמשחק. האתר אינו מנהל את השיח בעל־פה בין המשתתפים ואינו צד ליחסים ביניהם.</p></section>
                <section id="terms-minors"><h2>6. קטינים</h2><p>המשחק מתאים גם לקטינים. עם זאת, אין למסור בו פרטים רגישים, פרטי קשר, כתובת, סיסמה או מידע אישי שאינו נחוץ למשחק. הורה, אפוטרופוס או מסגרת חינוכית אחראים להחליט אם השימוש מתאים לקטין/ה שבאחריותם.</p></section>
                <section id="terms-ip"><h2>7. קניין רוחני</h2><p>העיצוב, הקוד, המיתוג ותכני האתר שייכים למפעילת האתר או משמשים אותה ברישיון. אין להעתיק, למכור, להפיץ מחדש, לבצע הנדסה לאחור או להשתמש בהם מעבר למה שמותר בתנאים אלה או בדין.</p></section>
                <section id="terms-changes"><h2>8. שינויים, הגבלה והפסקת שירות</h2><p>מפעילת האתר רשאית לעדכן את האתר, לשנות תכונות, להגביל שימוש או להפסיק את השירות, כולו או חלקו, מטעמי אבטחה, תחזוקה, מניעת שימוש לרעה או מכל טעם סביר. תנאים אלה עשויים להתעדכן; תאריך העדכון בראש הדף יציין את מועד העדכון האחרון.</p></section>
                <section id="terms-liability"><h2>9. אחריות והגבלת אחריות</h2><p>במידה המרבית המותרת בדין, מפעילת האתר אינה אחראית לנזק עקיף, לאובדן נתונים, לתקלת תקשורת, לזמינות של צד שלישי או להתנהגות של משתתף אחר. שום דבר בתנאים אלה אינו מגביל אחריות שאי אפשר להגביל לפי הדין החל.</p></section>
                <section id="terms-law"><h2>10. הדין החל</h2><p>על תנאים אלה יחולו דיני מדינת ישראל. מחלוקת תידון בבית המשפט המוסמך בישראל, בכפוף לכל הוראת דין מחייבת.</p></section>
            <?php else: ?>
                <section id="privacy-overview"><h2>1. מבוא</h2><p>מדיניות זו מסבירה איזה מידע נחוץ להפעלת תאר אותי, למה הוא משמש ואיך הוא נשמר. האתר אינו דורש הרשמה, חשבון או כתובת דוא״ל, ואינו מוכר מידע אישי.</p></section>
                <section id="privacy-collection"><h2>2. המידע שנאסף</h2><p>כדי לאפשר את המשחק נשמרים שם התצוגה, בחירת הדמות, קוד החדר, מזהה משתתף טכני, מצב המשחק, ניחושים, ניקוד וזמני פעילות. שרת האינטרנט וספקי התשתית עשויים גם לעבד נתונים טכניים רגילים כגון כתובת IP, סוג דפדפן וזמני בקשה לצורכי אבטחה ותפעול.</p></section>
                <section id="privacy-purpose"><h2>3. מטרות השימוש</h2><p>המידע משמש להפעלת החדר והמשחק, לזיהוי המשתתף באותו דפדפן, למניעת שימוש לרעה, לאבטחת השירות ולטיפול בתקלות. אין שימוש בפרטי המשחק לפרסום מותאם, לשיווק או למכירת מידע.</p></section>
                <section id="privacy-cookies"><h2>4. Cookies ואחסון בדפדפן</h2><p>האתר משתמש ב־cookie חיוני של PHP session כדי לאפשר רענון דף והמשך השתתפות באותו חדר. הוא מוגדר כ־HttpOnly ו־SameSite=Lax. בנוסף נשמרת ב־sessionStorage בחירה טכנית זמנית אם הודעת ההמלצה לשחק בטלפון כבר הוצגה. ללא רכיבים אלה חלק מהמשחק לא יעבוד כראוי.</p></section>
                <section id="privacy-sharing"><h2>5. מי יכול לראות את המידע</h2><p>משתתפי אותו חדר רואים את שם התצוגה, הדמות, הניקוד ותוצאות המשחק של המשתתפים האחרים בחדר. המארגן/ת מקבל/ת קישור הזמנה לחדר ועליו/ה לשתף אותו באחריות. בעת יצירת קוד QR, קישור ההזמנה נשלח מהדפדפן לשירות QR חיצוני בשם api.qrserver.com כדי להפיק את תמונת הקוד. השירות אינו נדרש כדי לשחק.</p></section>
                <section id="privacy-storage"><h2>6. שמירה ומחיקה</h2><p>נתוני חדר נשמרים בקובץ בשרת למשך המשחק. כאשר כל המשתתפים עוזבים את החדר, הוא מסומן למחיקה לאחר שעה ונמחק בהזדמנות הקרובה שבה מתבצעת בקשה לאתר. אין להסתמך על האתר כעל מקום לשמירת תוצאות או מידע לאורך זמן.</p></section>
                <section id="privacy-security"><h2>7. אבטחה</h2><p>האתר משתמש בקודי חדר וקישורי הזמנה אקראיים, בבדיקת session ובאחסון שאינו פתוח לגישה ישירה לפי הגדרות הפריסה. אף אמצעי אבטחה אינו מבטיח הגנה מוחלטת; לכן אין להזין מידע אישי רגיש במשחק.</p></section>
                <section id="privacy-minors"><h2>8. קטינים</h2><p>האתר מתאים גם לקטינים, אך יש להשתמש בשם תצוגה בלבד ולהימנע מהזנת פרטים אישיים מיותרים. אין באתר צ׳אט, העלאת קבצים או איסוף פרטי קשר.</p></section>
                <section id="privacy-rights"><h2>9. זכויות ופניות</h2><p>בכפוף לדין, ייתכן שתהיה זכאי/ת לעיין במידע אישי על אודותיך ולבקש את תיקונו או מחיקתו. בשלב זה לא מפורסמת כתובת קשר ייעודית; כאשר תפורסם דרך פנייה באתר h1la.com, היא תופיע בעמוד זה. בינתיים, נתוני חדרים נמחקים לפי המנגנון המתואר לעיל.</p></section>
                <section id="privacy-changes"><h2>10. עדכונים למדיניות</h2><p>מדיניות זו עשויה להשתנות כאשר האתר או אופן עיבוד המידע משתנים. תאריך העדכון בראש הדף יציין את מועד העדכון האחרון.</p></section>
            <?php endif; ?>
        </article>
    </main>
<?php else: ?>
    <main class="shell">
        <section id="landing" class="landing" aria-labelledby="landing-title">
            <div class="brand" aria-label="תאר אותי"><span>תאר</span> אותי</div>
            <p class="eyebrow">משחק חברתי של היכרות, צחוק וניחושים</p>
            <h1 id="landing-title">כמה טוב החברים באמת מכירים אותך?</h1>
            <p class="landing-copy">בכל סבב אחד המשתתפים מתאר חבר או חברה במילה אחת, וכל השאר מנסים לנחש במי מדובר. מי שיהיה הכי מהיר ומדויק יצבור את כל הנקודות.</p>
            <ul class="how-it-works" aria-label="כך משחקים">
                <li><strong>1.</strong> יוצרים חדר ושולחים הזמנה</li>
                <li><strong>2.</strong> מצטרפים עם שם ודמות</li>
                <li><strong>3.</strong> מתארים, מנחשים וצוברים נקודות</li>
            </ul>
            <button id="start-game" type="button" class="start-button">התחל/י משחק</button>
            <nav class="legal-links" aria-label="מידע משפטי">
                <a href="?page=terms">תנאי שימוש</a>
                <a href="?page=privacy">מדיניות פרטיות</a>
            </nav>
        </section>
        <section id="game-app" class="app" aria-live="polite" hidden>
            <header><a class="logo-home" href="index.php" aria-label="חזרה לעמוד הבית"><b><span>תאר</span> אותי</b></a><small id="room-code"></small></header>
            <div id="status" role="status"></div>
            <div id="screen"></div>
            <nav class="in-game-legal-links" aria-label="מידע משפטי">
                <a href="?page=terms">תנאי שימוש</a>
                <a href="?page=privacy">מדיניות פרטיות</a>
            </nav>
        </section>
    </main>
    <dialog id="mobile-note" class="mobile-note" aria-labelledby="mobile-note-title" aria-describedby="mobile-note-copy">
        <form method="dialog" class="mobile-note-content">
            <div class="mobile-note-tools">
                <div class="mobile-note-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="2.5" width="10" height="19" rx="2"/><path d="M10.5 18.5h3"/><path d="M19.5 7.5c1.2 1.2 1.2 3.1 0 4.3"/><path d="M4.5 7.5c-1.2 1.2-1.2 3.1 0 4.3"/></svg>
                </div>
            </div>
            <button class="mobile-note-close" value="dismiss" aria-label="סגירת ההמלצה">×</button>
            <p class="mobile-note-eyebrow">טיפ קטן לפני שמתחילים</p>
            <h2 id="mobile-note-title">הכי כיף לשחק מהטלפון</h2>
            <p id="mobile-note-copy">יותר נוח לשחק דרך טלפון, אפשרי לשחק במחשב.</p>
            <button class="mobile-note-action" value="continue">הבנתי, בואו נשחק</button>
        </form>
    </dialog>
    <script src="app.js?v=20261101-1"></script>
<?php endif; ?>
</body>
</html>
