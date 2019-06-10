$('document').ready(function() {
    function tableLoad() {
        $.ajax({
            url: 'teams.json',
            type: 'get',
            dataType: 'JSON',
            cache: false,
            error: function (data) {
                console.log(data);
            },
            success: function (data) {
                $.each(data, function (index, value) {
                    console.log(Object.keys(value));
                    console.log(index);
                    console.log(value);
                    console.log(value.rank);
                    console.log(value.teamLogo);
                    console.log(value.team);
                    console.log(value.playerOne);
                    console.log(value.playerOneFlag);
                    console.log(value.playerTwo);
                    console.log(value.playerTwoFlag);
                    console.log(value.playerThree);
                    console.log(value.playerThreeFlag);
                    console.log(value.playerFour);
                    console.log(value.playerFourFlag);
                    console.log(value.playerFive);
                    console.log(value.playerFiveFlag);
                    console.log(value.comment);

                    var rank = value.rank;
                    var teamLogo = value.teamLogo;
                    var team = value.team;
                    var playerOne = value.playerOne;
                    var playerOneFlag = value.playerOneFlag;
                    var playerTwo = value.playerTwo;
                    var playerTwoFlag = value.playerTwoFlag;
                    var playerThree = value.playerThree;
                    var playerThreeFlag = value.playerThreeFlag;
                    var playerFour = value.playerFour;
                    var playerFourFlag = value.playerFourFlag;
                    var playerFive = value.playerFive;
                    var playerFiveFlag = value.playerFiveFlag;
                    var comment = value.comment;
                    
                    $('#allTeams').append(`
                        <tr name=teamInfo>
                        <th class="rank" scope="row" name="rank">${rank}</th>
                        <td><img class="teamImage" src="${teamLogo}">${team}</td>
                        <td name="team">
                            <ul>
                                <li>${playerOne} <img class="playerFlag" src="${playerOneFlag}"></li>
                                <li>${playerTwo} <img class="playerFlag" src="${playerTwoFlag}"></li>
                                <li>${playerThree} <img class="playerFlag" src="${playerThreeFlag}"></li>
                                <li>${playerFour} <img class="playerFlag" src="${playerFourFlag}"></li>
                                <li>${playerFive} <img class="playerFlag" src="${playerFiveFlag}"></li>
                                </ul>
                            </td>
                        <td class="teamComment" name="comment">${comment}</td>
                        </tr>
                    `);
                });
            };
        });
    };
tableLoad();

    $("form").submit(function (e) {
        $('.teamInfo').remove();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: "ajaxprocess.php",
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function () {
                console.log('got here');
                tableLoad();
            };
        });
        e.preventDefault();
    });
});
