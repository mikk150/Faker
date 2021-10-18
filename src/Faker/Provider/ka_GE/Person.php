<?php

namespace Faker\Provider\ka_GE;

class Person extends \Faker\Provider\Person
{
    const ID_OLD = 'OLD';
    const ID_NEW = 'NEW';

    protected static $georgianLetters = [
        'ა','ბ','გ','დ','ე','ვ','ზ','თ','ი','კ','ლ','მ','ნ','ო','პ','ჟ','რ','ს','ტ','უ','ფ','ქ','ღ','ყ','შ','ჩ','ც','ძ','წ','ჭ','ხ','ჯ','ჰ'
    ];

    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
    ];

    protected static $firstNameMale = [
        'გიორგი', 'დავითი', 'ზურაბი', 'ალექსანდრე', 'ირაკლი', 'ლევანი', 'გოჩა', 'მამუკა', 'ზაზა', 'გივი', 'ავთანდილ',
        'მიხეილი', 'გელა', 'თამაზი', 'ლაშა', 'შოთა', 'თეიმურაზი', 'შალვა', 'გურამი', 'ნიკოლოზი', 'ნოდარი', 'ვლადიმერი',
        'ვაჟა', 'მერაბი', 'თენგიზი', 'გია', 'ბადრი', 'კობა', 'ვახტანგი', 'ივანე', 'მალხაზი', 'ნუგზარი', 'ამირანი', 'პაატა',
        'სერგო', 'ოთარი', 'რევაზი', 'აკაკი', 'ტარიელი', 'მადონა', 'დიმიტრი', 'იური', 'თემური', 'კახაბერი', 'ზვიადი',
        'ელგუჯა', 'ჯემალი', 'იოსები', 'რამაზი', 'ბექა', 'რომანი', 'კახა', 'თორნიკე', 'ბესიკი', 'არჩილი', 'ალექსი', 'ხვიჩა',
        'კონსტანტინე', 'ანზორი', 'ვასილი', 'სულიკო', 'ვალერი', 'რეზო', 'ზაური', 'ნიკა', 'დოდო', 'ომარი', 'მურმანი',
        'სოსო', 'გრიგოლი', 'გენადი', 'ავთანდილი', 'ემზარი', 'ჯუმბერი', 'გიგა', 'გოდერძი',
    ];

    protected static $firstNameFemale = [
        'ნინო', 'მაია', 'თამარი', 'ნანა', 'მანანა', 'ნათელა', 'ნათია', 'მარინე', 'ქეთევან', 'ხათუნა', 'მარინა', 'ლალი', 'ლიანა',
        'მზია', 'ლია', 'ეკატერინე', 'ანა', 'მარიამი', 'ირმა', 'ლეილა', 'ნანული', 'მერი', 'ლელა', 'თეა', 'სოფიო', 'ინგა',
        'ეთერი', 'ნონა', 'თეონა', 'შორენა', 'მაყვალა', 'ციალა', 'ლამარა', 'მაკა', 'თინა', 'ნელი', 'რუსუდანი', 'დალი',
        'ელენე', 'თინათინი', 'ნატო', 'ნატალია', 'ია', 'ჟუჟუნა', 'ნუნუ', 'ლილი', 'ნინა', 'დარეჯანი', 'იზოლდა', 'ირინა',
        'სალომე', 'ნანი', 'სვეტლანა', 'ილია', 'გულნარა', 'ეკა', 'ირინე', 'ნაზი', 'თამარა', 'ციცინო', 'ქეთევანი', 'ვენერა',
        'თამილა', 'ნაირა', 'სოფიკო', 'ცისანა', 'ელისო', 'ზაირა', 'ციური', 'დიანა', 'ელენა', 'იამზე', 'როზა', 'მედეა',
        'ცირა', 'ზოია', 'სულიკო', 'ლენა', 'ვერა', 'ლუიზა', 'ლარისა', 'ბელა', 'ნორა', 'დოდო', 'ვალენტინა', 'ქეთო', 'ზინა',
        'ტატიანა', 'მარია', 'მაგული', 'თამთა', 'ნაზიკო', 'ხატია', 'მარიკა', 'ელზა', 'ანნა', 'გვანცა', 'გალინა', 'ჯულიეტა',
    ];

    protected static $lastName = [
        'აბაშიძე', 'აბესაძე', 'აბრამიშვილი', 'აბულაძე', 'ალიევა', 'ალიევი', 'ასათიანი', 'აფციაური', 'ახალაია', 'ახვლედიანი',
        'ახმედოვა', 'ახმედოვი', 'ბაირამოვა', 'ბაირამოვი', 'ბარამიძე', 'ბარბაქაძე', 'ბაქრაძე', 'ბახტაძე', 'ბერაძე', 'ბერიშვილი',
        'ბერიძე', 'ბერუაშვილი', 'ბექაური', 'ბიწაძე', 'ბლიაძე', 'ბოლქვაძე', 'ბოჭორიშვილი', 'ბრეგვაძე', 'გაბუნია', 'გაგნიძე',
        'გაგუა', 'გასანოვა', 'გასანოვი', 'გაფრინდაშვილი', 'გაჩეჩილაძე', 'გელაშვილი', 'გიგაური', 'გიორგაძე', 'გოგალაძე',
        'გოგია', 'გოგიაშვილი', 'გოგიტიძე', 'გოგოლაძე', 'გოგოხია', 'გოგუაძე', 'გორგაძე', 'გრიგალაშვილი', 'გურგენიძე',
        'გუსეინოვა', 'გუსეინოვი', 'დავითაშვილი', 'დავითაძე', 'დანელია', 'დევაძე', 'დვალი', 'დვალიშვილი', 'დიასამიძე',
        'დოლიძე', 'დუმბაძე', 'ვაშაკიძე', 'ზოიძე', 'თავაძე', 'თევზაძე', 'თოდუა', 'თურმანიძე', 'ირემაძე', 'ისმაილოვა',
        'ისმაილოვი', 'კაკაბაძე', 'კალანდაძე', 'კანდელაკი', 'კაპანაძე', 'კახიძე', 'კერესელიძე', 'კვარაცხელია', 'კიკაბიძე',
        'კიკნაძე', 'კილაძე', 'კობახიძე', 'კონცელიძე', 'კოპალიანი', 'კუპატაძე', 'კურტანიძე', 'ლაბაძე', 'ლეჟავა', 'ლიპარტელიანი',
        'ლობჟანიძე', 'ლომთაძე', 'ლომიძე', 'ლომსაძე', 'ლორთქიფანიძე', 'მაისურაძე', 'მამედოვა', 'მამედოვი', 'მამულაშვილი',
        'მაღლაკელიძე', 'მაღრაძე', 'მაჭავარიანი', 'მაჭარაშვილი', 'მახარაშვილი', 'მახარაძე', 'მგელაძე', 'მეგრელიშვილი', 'მელაძე',
        'მესხი', 'მეტრეველი', 'მიქავა', 'მიქაძე', 'მიქელაძე', 'მოდებაძე', 'მჟავანაძე', 'მუმლაძე', 'მუსაევი', 'მღებრიშვილი',
        'მჭედლიშვილი', 'მჭედლიძე', 'ნადირაშვილი', 'ნადირაძე', 'ნაკაშიძე', 'ნაცვლიშვილი', 'ნაჭყებია', 'ნოზაძე', 'ონიანი',
        'ოქროპირიძე', 'პეტრიაშვილი', 'ჟვანია', 'ჟორჟოლიანი', 'ჟღენტი', 'რაზმაძე', 'რამიშვილი', 'რეხვიაშვილი', 'რობაქიძე', 'რუხაძე',
        'სამხარაძე', 'სარალიძე', 'სარქისიანი', 'სვანიძე', 'სირაძე', 'სიჭინავა', 'სიხარულიძე', 'სურმანიძე', 'ტაბატაძე', 'ტალახაძე',
        'ტყეშელაშვილი', 'ფეიქრიშვილი', 'ფერაძე', 'ფიფია', 'ფუტკარაძე', 'ფხაკაძე', 'ქავთარაძე', 'ქათამაძე', 'ქარდავა',
        'ქართველიშვილი', 'ქაჯაია', 'ქირია', 'ქობალია', 'ღვინიაშვილი', 'ღლონტი', 'ღონღაძე', 'ყურაშვილი', 'შავაძე', 'შაინიძე',
        'შალამბერიძე', 'შენგელია', 'შონია', 'შუბითიძე', 'ჩადუნელი', 'ჩიქოვანი', 'ჩიხლაძე', 'ჩუბინიძე', 'ჩხაიძე', 'ჩხეიძე',
        'ჩხიკვაძე', 'ცერცვაძე', 'ცეცხლაძე', 'ცინცაძე', 'ცუცქირიძე', 'წერეთელი', 'წიკლაური', 'წულაია', 'წურწუმია', 'ჭანტურია',
        'ჭელიძე', 'ჭიღლაძე', 'ჭკადუა', 'ჭუმბურიძე', 'ხარაიშვილი', 'ხაჩიძე', 'ხვედელიძე', 'ხურცილავა', 'ხურციძე', 'ხუციშვილი',
        'ჯავახიშვილი', 'ჯალაღონია', 'ჯანაშია', 'ჯანელიძე', 'ჯაფარიძე', 'ჯინჭარაძე', 'ჯიქია', 'ჯოხაძე', 'ჯოჯუა',
    ];

    protected static $titleMale = ['ბნ.', 'დოქ.', 'პროფ.'];

    protected static $titleFemale = ['ქნ.', 'დოქ.', 'პროფ.'];

    /**
     * @link http://www.refworld.org/docid/3ae6accf24.html
     */
    public static function personalNo()
    {
        return static::numerify('###########');
    }

    public static function idNumber($type = null)
    {
        if (!$type) {
            $type = static::randomElement(array(static::ID_NEW, static::ID_OLD));
        }
        if ($type == static::ID_NEW) {
            return strtoupper(static::bothify('##??#####'));
        }
        return static::randomElement(self::$georgianLetters).static::numerify('#######');
    }
}
