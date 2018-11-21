<?php function RandomQuoteByInterval($TimeBase, $QuotesArray){
 
    // Make sure it is a integer
    $TimeBase = intval($TimeBase);
 
    // How many items are in the array?
    $ItemCount = count($QuotesArray);
 
    // By using the modulus operator we get a pseudo
    // random index position that is between zero and the
    // maximal value (ItemCount)
    $RandomIndexPos = ($TimeBase % $ItemCount);
 
    // Now return the random array element
    return $QuotesArray[$RandomIndexPos];
}

// Use the day of the year to get a daily changing
// quote changing (z = 0 till 365)
$DayOfTheYear = date('h'); 
 
// You could also use:
//  --> date('m'); // Quote changes every month
//  --> date('h'); // Quote changes every hour
//  --> date('i'); // Quote changes every minute
 
// Example array with some random quotes
$RandomQuotes = array(
    "Surround yourself by people who lift you higher&mdash;not people who drag you down.",
    "When it rains, look for rainbows. When it's dark, look for stars.",
    "<strong>Hope</strong> is the only thing stronger than fear.",
    "This is your reminder that <strong>it's okay not to be perfect</strong>. It's okay to falter.",
    "There is nothing wrong with crying.",
    "Be your own kind of beautiful.",
    "Strong people don't put others down&mdash;they lift them up. <strong>~ Michael P. Watson</strong>",
    "We weren't born to fit in. If we all fit in, there would be no inventors or new ideas&mdash;no change for the better. Your story is important.",
    "Your story is important.",
    "Choose people who lift you up. <strong>~ Michelle Obama</strong>",
    "The very things that hold you down are going to lift you up. <strong>~ Timothy Mouse, <em>Dumbo</em></strong>",
    "A true hero isn't measured by the size of his strength, but by the strength of his heart. <strong>Zeus, <em>Hercules</em></strong>",
    "Love is louder.",
    "The things that don't \"fit in\" that make you unique make you yourself - that is your gift to the world. <strong>~ Sharon Stone</strong>",
    "Step with care and great tact, and remember life's a great balancing act. <strong>~ Dr. Seuss</strong>",
    "Even miracles take a little time. <strong>~ Fairy Godmother, <em>Cinderella</em></strong>",
    "You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose. <strong>~ Dr. Seuss</strong>",
    "We're friends&mdash;real friends&mdash;and that means no matter how long it takes, when you finally decide to look back, I'll be here. <strong>~ Meredith Grey, <em>Grey's Anatomy</em></strong>",
    "We're all damaged, it seems. Some of us more than others. We carry the damage with us from childhood. Then, as grownups, we give as good as we get. Ultimately, we all do damage, and then we set about the business of fixing whatever we can. <strong>~ Meredith Grey, <em>Grey's Anatomy</em></strong>",
    "When someone believes in your enough to lift you up, try not to let them down. <strong>~ Mark Amend</strong>"
);
 
print RandomQuoteByInterval($DayOfTheYear, $RandomQuotes);
?>
