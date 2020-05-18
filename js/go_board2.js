var current_game_path = '';
var current_board;

class BoardMatch {
    constructor(g_flag1, g_player1, g_photo1,
                g_flag2, g_player2, g_photo2,
                g_score1, g_score2) {
        this.g_flag1 = g_flag1;
        this.g_player1 = g_player1;
        this.g_photo1 = g_photo1;
        this.g_flag2 = g_flag2;
        this.g_player2 = g_player2;
        this.g_photo2 = g_photo2;
        this.g_score1 = g_score1;
        this.g_score2 = g_score2;
    }
}

function load_match_2_board(game, g_flag1, g_player1, g_photo1,
                            g_flag2, g_player2, g_photo2, g_score1, g_score2) {
    current_game_path = game;
    current_board = new BoardMatch(g_flag1, g_player1, g_photo1,
        g_flag2, g_player2, g_photo2, g_score1, g_score2);
    $("#match_id").load("../../blocks/t_go_board.html");
}

class Move {
    constructor(move_str) {
        this.color = move_str[0] == 'B' ? 'black' : 'white';
        this.coord = move_str.substr(2, 2);
        let start = move_str.indexOf("C[");
        if (start > -1) {
            move_str = move_str.substr(start);
            move_str = move_str.substr(2, move_str.length - 3);
            this.dead = move_str.split(",");
        }
    }
}

var types = "5444444444444444446" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1009000009000009002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1009000009000009002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "1009000009000009002" +
    "1000000000000000002" +
    "1000000000000000002" +
    "8333333333333333337";
var line = "abcdefghijklmnopqrs";
var start_pos = ";B[";
var div_go_cell =
    '<div id="c$coord" class="go_cell" style="background-image: url($cell_url)">';

function abc_2_number(abc) {
    return line.indexOf(abc);
}

function number_2_abc(i) {
    return line[i];
}

function abc_coord_2_cell_number(abc_coord) {
    return line.indexOf(abc_coord[1]) * 19 + line.indexOf(abc_coord[0]);
}

function abc_coord_2_cell_type(abc_coord) {
    return types[abc_coord_2_cell_number(abc_coord)];
}

function x_y_2_cell_number(x, y) {
    return x * 19 + y;
}

// ------------------------------------------------------------
// Board cell: cell_type, life, cell_abc_coord, x, y, color
// ------------------------------------------------------------
class BoardCell {
    constructor(cell_abc_coord, color) {
        this.cell_type = abc_coord_2_cell_type(cell_abc_coord);
        this.cell_abc_coord = cell_abc_coord;
        this.x = abc_2_number(cell_abc_coord[1]);
        this.y = abc_2_number(cell_abc_coord[0]);
        this.color = color;
    }
}

function addCells() {
    $('.go_board').html('');
    for (let i = 0; i < 361; i++) {
        $('.go_board').append(div_go_cell
            .replace('$coord', '' + line[i % 19] + '' + line[Math.floor(i / 19)])
            .replace('$cell_url',
                get_cell_type(types[i])));
    }
    init_board_cell();
    read_match(current_game_path);
}

function get_cell_type(type) {
    switch (type) {
        case '0':
            return '../../../img/icons/go_board/go_cell_0.jpg';
        case '1':
            return '../../../img/icons/go_board/go_cell_1.jpg';
        case '2':
            return '../../../img/icons/go_board/go_cell_2.jpg';
        case '3':
            return '../../../img/icons/go_board/go_cell_3.jpg';
        case '4':
            return '../../../img/icons/go_board/go_cell_4.jpg';
        case '5':
            return '../../../img/icons/go_board/go_cell_5.jpg';
        case '6':
            return '../../../img/icons/go_board/go_cell_6.jpg';
        case '7':
            return '../../../img/icons/go_board/go_cell_7.jpg';
        case '8':
            return '../../../img/icons/go_board/go_cell_8.jpg';
        case '9':
            return '../../../img/icons/go_board/go_cell_9.jpg';
        default:
            return '';
    }
}

var board_cells = [];
var game_moves = [];
var current_move = 0;
var current_cell;
var dead_white = 0;
var dead_black = 0;

function init_board_cell() {
    board_cells.length = 0;
    dead_white = 0;
    dead_black = 0;
    current_move = 0;
    for (let i = 0; i < 361; i++) {
        board_cells.push(new BoardCell('' + line[i % 19] + '' + line[Math.floor(i / 19)], ''));
    }
}

function read_match(file_name) {
    $.get(file_name, function (data) {
        game_moves.length = 0;
        current_move = 0;
        let moves = data.split(";");
        let player1 = moves[0];
        let player2 = moves[1];
        let result = moves[2];
        for (let i = 3; i < moves.length; i++) {
            game_moves.push(new Move(moves[i]));
        }
    }, 'text');
}

// -----------------------------------------------------------
// Do move
// -----------------------------------------------------------
function next_move() {
    if (current_move >= game_moves.length) {
        return;
    }
    let move = game_moves[current_move];
    let move_board_number = abc_coord_2_cell_number(move.coord);
    current_cell = board_cells[move_board_number];
    current_cell.color = move.color;

    let coord = '#c' + move.coord;
    let cell = $(coord);
    let background = '';
    if (move.color == 'black') {
        background = '../../../img/icons/go_board/black_cell_0.jpg';
    } else {
        background = '../../../img/icons/go_board/white_cell_0.jpg';
    }
    cell.css('background-image', 'url(' + background + ')');
    let p = $('<p/>');
    p.text("" + (current_move + 1));
    p.attr("style", "color:firebrick;margin:0");
    p.appendTo(cell);

    if (move.dead != null) {
        for (let i = 0; i < move.dead.length; i++) {
            let cur_dead = move.dead[i];
            let dead_board_number = abc_coord_2_cell_number(game_moves[cur_dead - 1].coord);
            let dead_cell = board_cells[dead_board_number];
            let html_item = $('#c' + dead_cell.cell_abc_coord);
            html_item.css(
                'background-image',
                'url(' + '../../../img/icons/go_board/go_cell_' + dead_cell.cell_type + '.jpg)');
            html_item.html("");
            if (move.color == 'black') {
                dead_white++;
            } else {
                dead_black++;
            }
        }
    }
    $("#white_dead_id").attr("value", "Снятые белые " + dead_white);
    $("#black_dead_id").attr("value", "Снятые чёрные " + dead_black);

    current_move++;
    $("#go_board_current_move_id").attr("value", current_move);
}

function prev_move() {
    $("#go_board_current_move_id").attr("value", current_move);
    current_move--;
    if (current_move < 0) {
        return;
    }
    let move = game_moves[current_move];
    let move_board_number = abc_coord_2_cell_number(move.coord);
    current_cell = board_cells[move_board_number];

    let html_item = $('#c' + current_cell.cell_abc_coord);
    html_item.css(
        'background-image',
        'url(' + '../../../img/icons/go_board/go_cell_' + current_cell.cell_type + '.jpg)');
    html_item.html("");

    if (move.dead != null) {
        for (let i = 0; i < move.dead.length; i++) {
            let cur_dead = move.dead[i];
            let dead_board_number = abc_coord_2_cell_number(game_moves[cur_dead - 1].coord);
            let dead_cell = board_cells[dead_board_number];
            let background = '';
            if (game_moves[cur_dead - 1].color == 'black') {
                background = '../../../img/icons/go_board/black_cell_0.jpg';
            } else {
                background = '../../../img/icons/go_board/white_cell_0.jpg';
            }
            let html_dead_item = $('#c' + dead_cell.cell_abc_coord);
            html_dead_item.css('background-image', 'url(' + background + ')');
            let p = $('<p/>');
            p.text("" + cur_dead);
            p.attr("style", "color:firebrick;margin:0");
            p.appendTo(html_dead_item);
            if (move.color == 'black') {
                dead_white--;
            } else {
                dead_black--;
            }
        }
    }
    $("#white_dead_id").attr("value", "Снятые белые " + dead_white);
    $("#black_dead_id").attr("value", "Снятые чёрные " + dead_black);
}

function prev_10_move() {
    if (current_move - 10 >= 0) {
        for (let i = 10; i > 0; i--) {
            prev_move();
        }
    }
}

function next_10_move() {
    if (current_move + 10 < game_moves.length) {
        for (let i = 0; i < 10; i++) {
            next_move();
        }
    }
}

function to_start() {
    for (let i = current_move; i > 0; i--) {
        prev_move();
    }
}

function to_end() {
    for (let i = current_move; i < game_moves.length; i++) {
        next_move();
    }
}