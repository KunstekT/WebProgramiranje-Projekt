# WebProgramiranje-Projekt
Web stranica sadrži logiranje korisnika te kada je korisnik prijavljen može 
koristiti mogućnost uploadanja slike u koju se sakriva string(niz) koji preda korisnik. 
Steganografija autorovog naziva kako bi u slučaju krađe ili kršenja autorskih prava,
korisnik mogao dokazati svoje autorsko pravo. Postoji mogućnost snimanja slika na svoj 
račun uz podatke kada je izvršena steganografija. Ove podatke može vidjeti samo korisnik 
na web stranici.

Team name: Čempres

Potrebne tehnologije: Bootstrap - responsive design
                            Javascript, PHP - steganografija i funkcionalnosti stranice
                            Firebase - login korisnika
                            CSS3 - oblikovanje
                            HTML5

Stranice:   Landing page - index
            About us
            How it works - Steganography
            Log-in/sign-in - pop up or page
            User settings (if logged in)

Landing page:   | small_image                                big_image(1/2)         small_box("Try it yourself")|
                | small_box("Kratko o, link na about us")    big_image(2/2)                 small_image         |

Steganography:  | small_box     small_box       small_box|
                |               big_box                  |

About us:       |box(1/4)                                |
                |box(2/4)       box(1/4)                 |
                |box(3/4)       box(2/4)         box(1/4)|
                |box(4/4)       box(3/4)         box(2/4)|
                |               box(4/4)         box(3/4)|
                |                                box(4/4)|
