vecino(ecuador,peru).
vecino(ecuador,colombia).
vecino(peru,colombia).
vecino(peru,brasil).
vecino(peru,bolivia).
vecino(peru,chile).
vecino(colombia,venezuela).
vecino(colombia,brasil).
vecino(venezuela,guyana).
vecino(venezuela,brasil).
vecino(guyana,surinam).
vecino(guyana,brasil).
vecino(surinam,brasil).
vecino(brasil,bolivia).
vecino(brasil,paraguay).
vecino(brasil,argentina).
vecino(brasil,uruguay).
vecino(bolivia,chile).
vecino(bolivia,paraguay).
vecino(bolivia,argentina).
vecino(chile,argentina).
vecino(paraguay,argentina).
vecino(argentina,uruguay).


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