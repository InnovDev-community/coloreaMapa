vecino(westpomeranian,pomeranian).
vecino(westpomeranian,greaterpoland).
vecino(westpomeranian,lubusz).
vecino(pomeranian,greaterpoland).
vecino(pomeranian,kuyavianpomeranian).
vecino(pomeranian,warmianmasurian).
vecino(greaterpoland,kuyavianpomeranian).
vecino(greaterpoland,lodz).
vecino(greaterpoland,opole).
vecino(greaterpoland,lowersilesian).
vecino(greaterpoland,lubusz).
vecino(lubusz,lowersilesian).
vecino(lowersilesian,opole).
vecino(opole,silesian).
vecino(opole,lodz).
vecino(silesian,lodz).
vecino(silesian,swietokrzyskie).
vecino(silesian,lesserpoland).
vecino(lodz,swietokrzyskie).
vecino(lodz,masovian).
vecino(lodz,kuyavianpomeranian).
vecino(kuyavianpomeranian,warmianmasurian).
vecino(kuyavianpomeranian,masovian).
vecino(warmianmasurian,masovian).
vecino(warmianmasurian,podlachian).
vecino(podlachian,masovian).
vecino(podlachian,lublin).
vecino(masovian,lublin).
vecino(masovian,swietokrzyskie).
vecino(swietokrzyskie,lublin).
vecino(swietokrzyskie,subcarpathian).
vecino(swietokrzyskie,lesserpoland).
vecino(lesserpoland,subcarpathian).
vecino(subcarpathian,lublin).

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
    