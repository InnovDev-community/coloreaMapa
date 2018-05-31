
vecino(schleswigholstein,hamburg)
vecino(schleswigholstein,mecklenburgvorpommern)
vecino(schleswigholstein,niedersachsen)
vecino(mecklenburgvorpommern,niedersachsen)
vecino(mecklenburgvorpommern,brandenburg)
vecino(hamburg,niedersachsen)
vecino(niedersachsen,bremen)
vecino(niedersachsen,sachsenanhalt)
vecino(niedersachsen,brandenburg)
vecino(niedersachsen,nordrheinwestfalen)
vecino(niedersachsen,hessen)
vecino(niedersachsen,thurigen)
vecino(sachsenanhalt,brandenburg)
vecino(sachsenanhalt,thurigen)
vecino(sachsenanhalt,sachsen)
vecino(brandenburg,berlin)
vecino(brandenburg,sachsen)
vecino(nordrheinwestfalen,rheinlandpflaz)
vecino(nordrheinwestfalen,hessen)
vecino(nordrheinwestfalen,hessen)
vecino(hessen,rheinlandpflaz)
vecino(hessen,badenwurttemberg)
vecino(hessen,bayer)
vecino(hessen,thurigen)
vecino(thurigen,bayer)
vecino(thurigen,sachsen)
vecino(sachsen,bayer)
vecino(rheinlandpflaz,saarland)
vecino(rheinlandpflaz,badenwurttemberg)
vecino(badenwurttemberg,bayer)


limitacon(A,B) :- vecino(A,B).

limitacon(A,B) :- vecino(B,A).

solution([]).
solution([X/Y|Tail]) :- 
            solution(Tail),
            color(Y, [1,2,3,4]),
            %cada numero representaría un color diferente
            diferentecolor(X/Y, Tail).


diferentecolor(_,[]).

diferentecolor(X/Y, [X1/Y1|Tail]) :-
            limitacon(X,X1),
            Y =\= Y1,
            diferentecolor(X/Y,Tail).

diferentecolor(X/Y, [X1/_|Tail]) :-
            not(limitacon(X,X1)),
            diferentecolor(X/Y,Tail).

color(Elemento,[Elemento|_]).
color(Elemento,[_|Restante]):-  color(Elemento,Restante). 