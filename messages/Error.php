<?php
namespace Messages;

final class Error {
    public static $unkonwn = 'Nieoczekiwany błąd aplikacji';
    public static $databaseConnection = 'Błąd połączenia z bazą danych';
    public static $templateNotFound = 'Błąd tworzenia widoku';
    public static $query = 'Błąd zapytania do bazy danych';
    public static $empty = 'Któraś z wartości jest pusta';
    public static $login = 'Nieprawidłowy login lub hasło!';
    public static $delete = 'Rekord nie został usunięty z bazy danych';
    public static $add = 'Rekord nie został dodany do bazy danych';
    public static $update = 'Rekord nie został zaktualizowany w bazie danych';
    public static $register = 'Rejestracja nie powiodła się!';
    public static $access = 'Brak dostępu!';
    public static $file = 'Błąd podczas przesyłania pliku!';
    public static $updateKonto = 'Błędne hasło lub źle wypełniony formularz!';
}
