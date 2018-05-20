# SPOTme Coin-Blockchain-Explorer
Block explorer for SPOTme Coin CryptoNote based cryptocurrency.

#### Installation

1) It takes data from the SPOT daemon. It should be accessible from the Internet. Run spotd daemon with open port as follows:
```bash
./spotd --restricted-rpc --enable-cors=* --enable-blockchain-indexes --rpc-bind-ip=0.0.0.0 --rpc-bind-port=32348
```
2) Just upload to your website and change 'api' variable in config.js to point to your internet accessible daemon.
