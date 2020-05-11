var stories = [
    {
        'number': '1',
        'title': 'Легенда',
        'author': 'Фролов Андрей Владимирович',
        'photo': '../../img/study/legend.jpg',
        'key_words': ['Тибет', 'Китай', 'Корея', 'Япония', 'Нидерланды'],
        'story_page': 'legend',
        'author_ref': 'players-lib',
    },
    {
        'number': '2',
        'title': 'Беседа о го',
        'author': 'Нечаев Алексей',
        'photo': '../../img/study/nech2.jpg',
        'key_words': ['Бессмертие', 'Баланс и равновесие',
            'Cохранить жизнь в поединке', 'Побег из тюрьмы', 'Недостатки и опыт'],
        'story_page': 'o-go-anechaev',
        'author_ref': 'players-lib',
    },
    {
        'number': '3',
        'title': 'ВЭФ-2018: Будущее 21-го века',
        'author': 'Минэкономразвития России',
        'photo': '../../img/study/vef.jpg',
        'key_words': [],
        'story_page': 'eef-2018',
        'author_ref': 'eef-2018',
    },
    {
        'number': '4',
        'title': 'Го в Японии. 60 - 70-е гг.',
        'author': 'Такагава Сюкаку',
        'photo': '../../img/study/takagava.jpg',
        'key_words': ['Япония', 'Такагава Сюкаку', 'о. Кюсю. пров. Вакаяма',
            'Изготовление камней', 'г. Нара. 8 в.н.э.'],
        'story_page': 'japan-60-70',
        'author_ref': 'japan-60-70',
    },
    {
        'number': '5',
        'title': 'Го и нейропластичность',
        'author': 'Авраамов Павел',
        'photo': '../../img/study/shtirlits.jpg',
        'key_words': ['Зоны Бродмана', 'Планирование будущего', 'Штирлиц и Шелленберг',
            'Связность зон мозга', 'Стеклянный потолок'],
        'story_page': 'neiro',
        'author_ref': 'neiro',
    }
];

function fill_key_words(tag_id, data) {
    let container = $(tag_id);
    if (data.length == 1 && data[0].length == 0) {
        return;
    }
    for (let i = 0; i < data.length; i++) {
        let small = $('<small/>');
        let br = $('<br>');
        small.addClass('key_word_css');
        small.text(data[i]);
        small.appendTo(container);
        br.appendTo(container);

    };
}

var page_map = new Map();

page_map.set('o-go-anechaev', 'nechaev_o_go.html');
page_map.set('eef-2018', 'eef_2018.html');
page_map.set('japan-60-70', 'japan_60_70.html');
page_map.set('legend', 'legend.html');
page_map.set('neiro', 'neiro.html');
