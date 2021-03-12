## Testovací úkol PHP + Bezpečnost

### Zadání

### Stránka A 

Uprav stránku tak, aby hodnoty z formuláře ukládala do SQL databáze. Nechám na tobě,
zda se data v databázi budou při každém odeslání v DB přepisovat a nebo se budou
přidávat. 

Je možno použít jakoukoliv knihovnu, v takovém případě je třeba doplnit Composer
definice.

**Požadavky:**

- Všechny položky formuláře jsou povinné.
- E-mail musí mít tvar e-mailu.
- V případě chybného zadání musí uživatel být srozumitelně vyrozuměn, co má
  špatně a musí mu zůstat formulář vyplněný (aby nemusel zadávat údaje znovu).
- Po uložení se zobrazí potvrzení o uložení, ale uživatel zůstává na stránce A 
  (nesmí být přesměrován automaticky na stránku B).

### Stránka B

Uprav stránku tak, aby zobrazovala hodnotu uloženou do DB ze stránky A. Nechám
na tobě, zda bude nějak zobrazovat všechny záznamy a nebo jen jeden (poslední zadaný).

### Dodatek

- Pokud bude použita MySQL databáze, připoj DQL pro vytvoření tabulek, pokud 
  nebude aplikace řešit vlastní cestou. 