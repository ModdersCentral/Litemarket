<?php
/*
Run this as a cron job every 5 minutes




This is still in development due to bugs with transaction fee calculation
-if there is a unspentTX that has lots of small inputs the vendor gets a high higher fee, so im tying to find a way to combat this





 - The check for sufficient funds is done before paying transaction fees (if any); if a
   transaction fee is needed, and there are sufficient funds in the wallet, then the
   transaction fee will be paid and debited from the account.  For example, if account
   'foo' contains 10 bitcoins, you sendfrom foo 15VjRaDX9zpbA8LVnbrCAFzrVzN7ixHNsC 10,
   and the transaction costs 0.01, 'foo's balance will be -0.01 bitcoins.



Customer creates an account on the website: web server either assigns them a unique customer id number or uses their email address or other unique identifier, calls getaccountaddress "userid" and tells the customer to send to that address to fund their account.
Customer receives coins to fund their account: web server isn't involved.
Customer is shown their current balance: getbalance "userid" 6 to get their 'confirmed' balance, and subtracts it from getbalance "userid" 0 to get their 'unconfirmed' balance.
Show the customer an **itemized list** of transactions: listtransactions "userid"
Customer sends coins to another bitcoin address: sendfrom "userid" <address> <amount>
Customer transfers coins to another customer: move "userid1" "userid2" <amount>
You make a sale, paid for with bitcoins in the customer's account: move "userid" "" <amount> 6 "purchased item", and if it succeeds, send them the product.
Customer is charged a fee for use of the service: move "userid" "FEES" <amount> (using special accounts like "FEES" can make your application's logic much simpler)
Customer purchases bitcoins from you: move "AVAILABLE" "userid" <amount> (assuming the bitcoins you are selling are kept track of in an "AVAILABLE" account)

*/

?>