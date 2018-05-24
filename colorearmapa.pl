vecino(washington,oregon).
vecino(washington,idaho).
vecino(oregon,idaho).
vecino(oregon,california).
vecino(oregon,nevada).
vecino(california,nevada).
vecino(california,arizona).
vecino(nevada,idaho).
vecino(nevada,utah).
vecino(nevada,arizona).
vecino(idaho,montana).
vecino(idaho,wyoming).
vecino(idaho,utah).
vecino(utah,wyoming).
vecino(utah,colorado).
vecino(utah,newmexico).
vecino(utah,arizona).
vecino(arizona,colorado).
vecino(arizona,newmexico).
vecino(montana,northdakota).
vecino(montana,southdakota).
vecino(montana,wyoming).
vecino(wyoming,northdakota).
vecino(wyoming,southdakota).
vecino(wyoming,nebraska).
vecino(wyoming,colorado).
vecino(colorado,nebraska).
vecino(colorado,kansas).
vecino(colorado,oklahoma).
vecino(colorado,newmexico).
vecino(newmexico,oklahoma).
vecino(newmexico,texas).
vecino(northdakota,southdakota).
vecino(northdakota,minnesota).
vecino(southdakota,nebraska).
vecino(southdakota,iowa).
vecino(southdakota,minnesota).
vecino(nebraska,iowa).
vecino(nebraska,missouri).
vecino(nebraska,kansas).
vecino(kansas,missouri).
vecino(kansas,oklahoma).
vecino(oklahoma,missouri).
vecino(oklahoma,arkansas).
vecino(oklahoma,texas).
vecino(texas,arkansas).
vecino(texas,louisiana).
vecino(minnesota,wisconsin).
vecino(minnesota,iowa).
vecino(iowa,wisconsin).
vecino(iowa,illinois).
vecino(iowa,missouri).
vecino(missouri,illinois).
vecino(missouri,kentucky).
vecino(missouri,tennessee).
vecino(missouri,arkansas).
vecino(arkansas,tennessee).
vecino(arkansas,mississippi).
vecino(arkansas,louisiana).
vecino(louisiana,mississippi).
vecino(wisconsin,michigan).
vecino(wisconsin,illinois).
vecino(illinois,indiana).
vecino(illinois,kentucky).
vecino(mississippi,tennessee).
vecino(mississippi,alabama).
vecino(alabama,tennessee).
vecino(alabama,georgia).
vecino(alabama,florida).
vecino(florida,georgia).
vecino(georgia,tennessee).
vecino(georgia,northcarolina).
vecino(georgia,southcarolina).
vecino(southcarolina,northcarolina).
vecino(tenesse,northcarolina).
vecino(tenesse,virginia).
vecino(tenesse,kentucky).
vecino(northcarolina,virginia).
vecino(kentucky,virginia).
vecino(kentucky,westvirginia).
vecino(kentucky,ohio).
vecino(kentucky,indiana).
vecino(indiana,michigan).
vecino(indiana,ohio).
vecino(michigan,ohio).
vecino(ohio,pennsylvania).
vecino(ohio,westvirginia).
vecino(westvirginia,virginia).
vecino(westvirginia,maryland).
vecino(westvirginia,pennsylvania).
vecino(virginia,maryland).
vecino(maryland,pennsylvania).
vecino(maryland,delaware).
vecino(pennsylvania,delaware).
vecino(pennsylvania,newjersey).
vecino(pennsylvania,newyork).
vecino(delaware,newjersey).
vecino(newjersey,newyork).
vecino(newyork,connecticut).
vecino(newyork,massachusetts).
vecino(newyork,vermont).
vecino(connecticut,rhodeisland).
vecino(connecticut,massachusetts).
vecino(rhodeisland,massachusetts).
vecino(massachusetts,vermont).
vecino(massachusetts,newhampshire).
vecino(vermont,newhampshire).
vecino(newhampshire,maine).

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

color(Item,[Item|_]).
color(Item,[_|Rest]):-  color(Item,Rest). 