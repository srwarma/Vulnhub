cadena = '1 (afoulon:124922b5d61dd31177ec83719ef8110a,pbaudouin:64202ddd5fdea4cc5c2f856efef36e1a,rlefrancois:ef0dafa5f531b54bf1f09592df1cd110,mriviere:d0eeb03c6cc5f98a3ca293c1cbf073fc,mnguyen:f7111a83d50584e3f91d85c3db710708,pgervais:2ba907839d9b2d94be46aa27cec150e5,placombe:04d1634c2bfffa62386da699bb79f191,triou:6c26031f0e0859a5716a27d2902585c7,broy:b2d2e1b2e6f4e3d5fe0ae80898f5db27,brenaud:2204079caddd265cedb20d661e35ddc9,slamotte:21989af1d818ad73741dfdbef642b28f,nthomas:a085d095e552db5d0ea9c455b4e99a30,vhoffmann:ba79ca77fe7b216c3e32b37824a20ef3,rmasson:ebfc0985501fee33b9ff2f2734011882,srwarma:25f9e794323b453885f5181f1b624d0b,edidota:25f9e794323b453885f5181f1b624d0b,prueba:25f9e794323b453885f5181f1b624d0b,prue:25f9e794323b453885f5181f1b624d0b,dfasf:25f9e794323b453885f5181f1b624d0b)'

# Separar la cadena por comas
elementos = cadena.split(',')

# Escribir los elementos en el archivo
with open('pass.txt', 'w') as archivo:
    for elemento in elementos:
        archivo.write(elemento.strip() + '\n')

print("Los elementos han sido escritos en pass.txt")
