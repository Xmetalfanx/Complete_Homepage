#Seconfig XP

 <p class="center">
   [https://seconfig.sytes.net/](https://seconfig.sytes.net/)
 </p>

This is a tool for configuring mostly hidden Windows 2000/XP/2003 (and probably up) settings. With this tool it is easy to adjust Windows to relatively good network security level.<br />  Settings are divided in three sections:

---

(GET SOURCE FOR THE CONTENT BELOW )

<strong>Restrict Microsoft Networks</strong><br />  This part mostly disable use of TCP/IP protocol as a transport for network access to this computer in the way it is done in Microsoft Networks. TCP/IP is the protocol suite used by the internet and most network attacks (by worms, hackers etc.) to Windows systems are using Microsoft Networks like access via internet, thus these options provide a way to stop most attacks to Windows operating system from the internet.

<strong>Services settings</strong>
Here can be changed settings for mainly insecure services, usually used in LANs or not used at all.

<strong>TCP/IP settings</strong><br />  Here are some settings to disable insecure and mostly unused/unneeded features of Windows TCP/IP stack. It is also possible to change starting ephemeral port here.

<strong>Detailed descriptions</strong>

**Disable NetBIOS over TCP/IP (all adapters)**

- This option unbinds NetBT (NetBIOS over TCP/IP) from all network adapters (closing ports 137-139 on all currently installed network interfaces). <br />  This is very similar to selecting &quot;Disable NetBIOS over TCP/IP&quot; (in Advanced... - WINS tab) TCP/IP option for all network adapters.<br />  Note: Unlike manual selecting, this also affects hidden adapters. From the other hand - hidden adapters usually have ability to set this option on per connection basis.

<strong>Disable SMB over TCP/IP</strong><br />  This disables direct hosting of SMB over TCP/IP (closing port 445).<br />  Note: When this is disabled along with NetBIOS over TCP/IP, in most cases there are no transport protocols for SMB/CIFS, thus SMB/CIFS (required for file/printer sharing and many other Microsoft Networks features) is not available. This is a good security practice for standalone workstations/servers, but can cause problems in Microsoft Networks environments.


<strong>Disable RPC over TCP/IP</strong><br />  This option configures RPC/DCOM not to use TCP/IP as transport protocol (closing port 135). This is highly recommended for standalone computers, because many worms spread through RPC and it is also commonly used in hacker attacks. On Microsoft Networks environments this is not recommended, because RPC is widely used there, especially for administrative purposes.

<strong>NetBIOS Scope ID</strong><br />  This is a way to restrict (not disable) NetBIOS over TCP/IP communication. Two computers must have the same Scope ID value to communicate via NetBIOS over TCP/IP. For standalone computers setting this to a randomly chosen value adds extra security to NetBIOS over TCP/IP (because even if NetBIOS over TCP/IP will be re-enabled Scope ID value probably will not be known by attacker).<br />  Notes: Setting Scope ID does NOT affect directly hosted SMB over TCP/IP communications. The Scope ID often is broadcasted to the network and is simply readable by any user.

<strong>Disable Remote Registry service</strong><br />  This changes startup type of Remote Registry service to disabled. Remote Registry service is used for remote modification of Windows registry and is mostly used for administrative purposes on Microsoft Networks.

<strong>Disable Messenger service</strong><br />  This changes startup type of Messenger service to disabled. Messenger service is used mostly in Microsoft Networks environments for receiving net send messages and some administrative alerts. On standalone computers this service is usually neither needed nor danger by itself, but on completely unprotected systems it can be used for a kind of spamming (advertising).<br />  Note: The Messenger service is not related to Windows Messenger or MSN Messenger.

<strong>Disable SSDP Discovery Service service</strong><br />  This changes startup type of SSDP Discovery Service service to disabled. This service is used for discovery of UPnP devices on the network. Disabling it will disable most of Windows UPnP support. On systems having no UPnP devices (UPnP devices are those connected directly to network and NOT to computer) SSDP Discovery Service service should be disabled.

<strong>Do not start IPSEC Services service automatically</strong><br />  This changes startup type of IPSEC Services service to manual. This setting should be enabled only on systems NOT using IPSec (most systems). IPSEC Services service simply is not usually needed and opens some otherwise closed ports.

<strong>Drop all incoming IP source routed packets</strong><br />  This option tells Windows to ignore all incoming IP packets with source route options. Source routing is often used for IP address spoofing and very rarely required for normal network operations. In most cases dropping all incoming IP source routed packets is a good security practice.

<strong>Disable automatic detection of &quot;dead&quot; gateways</strong><br />  This setting tells Windows NOT to switch to a backup gateway if a number of connections experience difficulty. In some rare situations switching of gateways can be used to redirect network traffic through attackers machine.<br />  Note: On systems with multiple default gateways this option may hinder Windows from using backup gateway.

<strong>Disable IRDP (all interfaces)</strong><br />  This option disables IRDP (Internet Router Discovery Protocol) on all interfaces. IRDP is NOT the same as DHCP. IRDP can be used to automatically detect and configure address of default gateway. IRDP can allow network traffic to be redirected through attackers machine. Is most cases it is a good security practice to disable IRDP.

<strong>Disable ICMP redirect</strong><br />  This option tells Windows to ignore ICMP redirect messages. ICMP redirect messages can be used to redirect network traffic through attackers machine. It is a good security practice to disable ICMP redirect.<br />  Note: This option may cause problems with Routing and Remote Access service configured as ASBR.

<strong>Enable strict ARP table update</strong><br />  This setting tells Windows to update existing entries in ARP table only if they time out (thus ignoring most unsolicited ARP packets). It is a good security practice to have this option enabled.<br />  Notes: This option may cause problems communicating with devices with dynamic MAC addresses. This option is supported only on relatively new versions of Windows (2000 with Update Rollup 1 for SP4; XP with SP2; Server 2003 with SP1).

<strong>Accept responses only from queried DNS servers</strong><br />  This option tells Windows to ignore DNS answers from IP addresses it hasn't sent queries to. It is a good security practice to accept responses only from queried DNS servers.

<strong>Disable ports 1025 to N</strong><br />  Here can be changed starting port for ephemeral port range. Ephemeral port range is ports dynamically allocated to applications not specifying port numbers to use. By default this range starts at port 1025 (and ends at port 5000). Here can be changed starting port for this range by disabling (reserving) ports 1025 to N, thus ephemeral range will start at port N+1. Main idea of this is to make &quot;guessing&quot; of ephemeral ports opened by system components harder (usually these ports will start at 1025 because system components are started before most other software, but now they will start at N+1). In most cases it is a good security practice to disable ports 1025 to N setting N to randomly chosen (but not very high) value.<br />  Note: This option may cause problems on Windows 2000 computers with Routing and Remote Access service configured as NAT gateway (see MS KB815295 for required hotfix).

<strong>Restore</strong><br />  Every setting changed by Seconfig XP was backed up (when changed first time). This button restores all settings to backed up values and restarts computer.

<strong>For MN</strong><br />  This button loads/generates settings best suited for average Microsoft Networks workstation/server.

<strong>For home</strong><br />  This Button loads/generates settings best suited for average standalone computer with no need for Microsoft Networks.

<strong>For VPN</strong><br />  This Button loads/generates settings best suited for average standalone computer which via VPN acts as Microsoft Networks workstation.





(This was all taken from the help section of Seconfig.. I reformatted the text to fit my site ... the CONTENT of the text belongs to the author and not me ... I take no credit for writing it)
