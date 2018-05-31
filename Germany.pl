
vecino(schleswigholstein,hamburg).
vecino(schleswigholstein,mecklenburgvorpommern).
vecino(schleswigholstein,niedersachsen).
vecino(mecklenburgvorpommern,niedersachsen).
vecino(mecklenburgvorpommern,brandenburg).
vecino(hamburg,niedersachsen).
vecino(niedersachsen,bremen).
vecino(niedersachsen,sachsenanhalt).
vecino(niedersachsen,brandenburg).
vecino(niedersachsen,nordrheinwestfalen).
vecino(niedersachsen,hessen).
vecino(niedersachsen,thuringen).
vecino(sachsenanhalt,brandenburg).
vecino(sachsenanhalt,thuringen).
vecino(sachsenanhalt,sachsen).
vecino(brandenburg,berlin).
vecino(brandenburg,sachsen).
vecino(nordrheinwestfalen,rheinlandpflaz).
vecino(nordrheinwestfalen,hessen).
vecino(nordrheinwestfalen,hessen).
vecino(hessen,rheinlandpflaz).
vecino(hessen,badenwurttemberg).
vecino(hessen,bayern).
vecino(hessen,thuringen).
vecino(thuringen,bayern).
vecino(thuringen,sachsen).
vecino(sachsen,bayern).
vecino(rheinlandpflaz,saarland).
vecino(rheinlandpflaz,badenwurttemberg).
vecino(badenwurttemberg,bayern).

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