class Player0920 {
    constructor(place, player, city, rank,
                game1, game2, game3, total) {
        this.place = place;
        this.player = player
        this.city = city;
        this.rank = rank;
        this.game1 = game1;
        this.game2 = game2;
        this.game3 = game3;
        this.total = total;
    }
}

var r0920 = [];

$.ajax({
    url: '0920.txt',
    dataType: 'text',
    async: false,

    success: function (data) {
        let lines = data.split("\n");
        $.each(lines, function (n, elem) {
                let f = elem.split(",");
                let player = new Player0920(
                    f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7]);
                r0920.push(player);
            }
        );
    }
});
